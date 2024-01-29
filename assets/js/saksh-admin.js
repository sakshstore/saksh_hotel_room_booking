jQuery(document).ready( function() {
 
 
 
          
          
          
        var calendarEl = document.getElementById('calendar');
        
        
        var calendar = new FullCalendar.Calendar(calendarEl, {
         initialView: 'multiMonthYear',
         
         events: saksh_object.ajax_url + "?action=saksh_booking_history",
         
    selectable: true,
         
           eventClick: function(info) { 
    
    
    window.open(saksh_object.saksh_report_url +'?page=date_wise_booking&request_date='+ info.event.startStr, 'name'); 
    
    
    
     
  },
  
               
         
         dateClick: function(info) { 
    
    
    window.open(saksh_object.saksh_report_url +'?page=date_wise_booking&request_date='+ info.dateStr, 'name'); 
    
    
    
     
  }
  
  
  
        });
        
        
        calendar.render();
        
        
        
      });
      
      
      
      /*
      
jQuery(function ($) {

    var sakhs_bookings_obj = {
        init: function () {
            sakhs_bookings_obj.callAjaxMethod();
        },
        callAjaxMethod:function(){
            var data = {
                'action': 'saksh_booking_history',  // your action name
                'name': "Shweta"
            };

            $.ajax({
                url: ajaxurl,
                type: 'POST',
                data: data,
                success: function (response) {
                    console.log(response);
                }
            });
        }
    }
    sakhs_bookings_obj.init();
});

*/
