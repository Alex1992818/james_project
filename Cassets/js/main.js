$(function(){

    var currentDate; // Holds the day clicked when adding a new event
    var currentEvent; // Holds the event object when editing an event
    var user_id;

    $('#color').colorpicker(); // Colopicker
    

    var base_url='http://www.mytutoring.pro/'; // Here i define the base_url

    // Fullcalendar
    $('#calendar').fullCalendar({
    
        header: {
            left: 'prev, next, today',
            center: 'title',
            right: 'month'
        },
       
        // Get all events stored in database
        editable: true, // Make the event resizable true    
        eventLimit: true, // allow "more" link when too many events
        events: base_url+'calendar/getEvents',
        selectable: true,
        selectHelper: true,
       
            select: function(start, end) {
                $('#start').val(moment(start).format('YYYY-MM-DD HH:mm:ss'));
                $('#end').val(moment(end).format('YYYY-MM-DD HH:mm:ss'));
                 // Open modal to add event
            modal({
                // Available buttons when adding
                buttons: {
                    add: {
                        id: 'add-event', // Buttons id
                        css: 'btn-success', // Buttons class
                        label: 'Add' // Buttons label
                    }
                },
                title: 'Available Time' // Modal title
            });
            
        }, 
       

         eventDrop: function(event, delta, revertFunc,start,end) {  
            
            start = event.start.format('YYYY-MM-DD HH:mm:ss');
            if(event.end){
                end = event.end.format('YYYY-MM-DD HH:mm:ss');
            }else{
                end = start;
            }         
               $.post(base_url+'calendar/dragUpdateEvent',{                            
                id:event.id,
                start :start,
                end :end
            }, function(result){
                $('.alert').addClass('alert-success').text('Event updated successfuly');
                hide_notify();
            });



          },
          eventResize: function(event,dayDelta,minuteDelta,revertFunc) {         
            start = event.start.format('YYYY-MM-DD HH:mm:ss');
            if(event.end){
                end = event.end.format('YYYY-MM-DD HH:mm:ss');
            }else{
                end = start;
            }         
               $.post(base_url+'calendar/dragUpdateEvent',{                            
                id:event.id,
                start :start,
                end :end
            }, function(result){
                $('.alert').addClass('alert-success').text('Event updated successfuly');
                hide_notify();
            });
            },
          
        // Event Mouseover
        eventMouseover: function(calEvent, jsEvent, view){
            var tooltip = '<div class="event-tooltip">' + calEvent.to_time + '</div>';
            $("body").append(tooltip);
            $(this).mouseover(function(e) {
                $(this).css('z-index', 10000);
                $('.event-tooltip').fadeIn('500');
                $('.event-tooltip').fadeTo('10', 1.9);
            }).mousemove(function(e) {
                $('.event-tooltip').css('top', e.pageY + 10);
                $('.event-tooltip').css('left', e.pageX + 20);
            });
        },
        eventMouseout: function(calEvent, jsEvent) {
            $(this).css('z-index', 8);
            $('.event-tooltip').remove();
        },
        // Handle Existing Event Click
        eventClick: function(calEvent, jsEvent, view) {
            // Set currentEvent variable according to the event clicked in the calendar
            currentEvent = calEvent;
            // Open modal to edit or delete event
            modal({
                // Available buttons when editing
                buttons: {
                    delete: {
                        id: 'delete-event',
                        css: 'btn-danger',
                        label: 'Delete'
                    },
                    update: {
                        id: 'update-event',
                        css: 'btn-success',
                        label: 'Update'
                    }
                },
                title: 'Edit Event',
                event: calEvent
            });
        },

    });

    // Prepares the modal window according to data passed
    function modal(data) {
        // Set modal title
        $('.modal-title').html(data.title);
        // Clear buttons except Cancel
        $('.modal-footer button:not(".btn-default")').remove();
        $('#color').val(data.event ? data.event.color : '#3a87ad');
        // Create Butttons
        $.each(data.buttons, function(index, button){
            $('.modal-footer').prepend('<button type="button" id="' + button.id  + '" class="btn ' + button.css + '">' + button.label + '</button>')
        })
        //Show Modal
        $('#calender_modal').modal('show');
    }

    // Handle Click on Add Button
    $('#calender_modal').on('click', '#add-event',  function(e){
        // if(validator(['title', 'description'])) {
            $.post(base_url+'calendar/addEvent', {
                user_id: $('#user_id').val(),
                color: $('#color').val(),
                start: $('#start').val(),
                end: $('#end').val(),
                from_time: $('#from_time').val(),
                to_time: $('#to_time').val(),
            }, function(result){
                $('.alert').addClass('alert-success').text('Event added successfuly');
                $('#calender_modal').modal('hide');
                $('#calendar').fullCalendar("refetchEvents");
                hide_notify();
            });
        // }
    });


    // Handle click on Update Button
    $('#calender_modal').on('click', '#update-event',  function(e){
        // if(validator(['title', 'description'])) {
            $.post(base_url+'calendar/updateEvent', {
                id: currentEvent._id,
                from_time: $('#from_time').val(),
                to_time: $('#to_time').val(),
                color: $('#color').val()
            }, function(result){
                $('.alert').addClass('alert-success').text('Event updated successfuly');
                $('#calender_modal').modal('hide');
                $('#calendar').fullCalendar("refetchEvents");
                // hide_notify();
                
            });
        // }
    });



    // Handle Click on Delete Button
    $('#calender_modal').on('click', '#delete-event',  function(e){
        $.get(base_url+'calendar/deleteEvent?id=' + currentEvent._id, function(result){
            $('.alert').addClass('alert-success').text('Event deleted successfully !');
            $('#calender_modal').modal('hide');
            $('#calendar').fullCalendar("refetchEvents");
            hide_notify();
        });
    });

    function hide_notify()
    {
        setTimeout(function() {
                    $('.alert').removeClass('alert-success').text('');
                }, 8000);
    }


    // Dead Basic Validation For Inputs
    // function validator(elements) {
    //     var errors = 0;
    //     $.each(elements, function(index, element){
    //         if($.trim($('#' + element).val()) == '') errors++;
    //     });
    //     if(errors) {
    //         $('.error').html('Please insert title and description');
    //         return false;
    //     }
    //     return true;
    // }
});