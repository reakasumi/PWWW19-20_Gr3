// var  search_value="helloworld";

var place = ["/new york/i", "Berlin", "Paris"];
var startDate;
var endDate;
var guests;

    


    function start(){
     var enterButton=document.getElementById("button1");
   
     enterButton.addEventListener("click", load, false );

    
     


    }

    function load(){
         
         var isgood=false;
         var isnotempty=false;
         search_value= document.getElementById("myInput").value;

         startDate = document.getElementById("myDate1").value;
         sessionStorage.setItem("startDatetext",startDate);
         endDate = document.getElementById("myDate2").value;
         sessionStorage.setItem("endDatetext",endDate);
         guests= document.getElementById("myInput2").value;
         sessionStorage.setItem("guestsText", guests);
         sessionStorage.setItem("numdays",getDays());


         for (var i in place) {
            if(place[i]==search_value){
               sessionStorage.setItem("placeText",search_value); 
               isgood=true;
            }
         }
        if(startDate!=""&&endDate!=""&&guests.toString()!=""){
            isnotempty=true;
        }

         if(isgood){
            console.log(isnotempty);
                  if(isnotempty){
                  window.location.href="newyork.html";}
                  else{
                   window.alert("A field is empty");
                  }
            }
            else{
                window.alert("There is no " +search_value+ " in this website" );
            }
         
   
         //var obj=new SDate();

         //document.getElementById("demo").innerHTML = obj.getStartDate();

       
        // document.getElementById("demo").innerHTML = search_value;
         
        //window.location.href="ushtrime2.html";
    }
   



       function convertDateToString(date){
           try{
           var dateArr = date.split('-');
           var dateString;

           if (dateArr.length > 1) {
               dateString=(dateArr[2] + '/' + dateArr[1] + '/' + dateArr[0]);
            }  } catch(e){
               console.log("Error, the value is null or undefined.")
           }
           return dateString;
        }




        function getDays(){
    
          var Difference_In_Time = (new Date(endDate)).getTime() - (new Date(startDate)).getTime(); 
          var Difference_In_Days = Difference_In_Time / (1000 * 3600 * 24); 
          return Difference_In_Days+1;
        } 


        function isInInterval(e){
            return (e>=(new Date(startDate)) && e<=(new Date(endDate)));
        }
       
        function getStartDate(){
            return startDate;
        }


 

            window.addEventListener("load",start, false);








     