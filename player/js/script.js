/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
            $(this).bind("contextmenu", function(e) {
                e.preventDefault();
            });
        }); 


function getid(id)
{
        var id = id;
        $.ajax({    //create an ajax request
        type: "POST",
        data:"id="+id,
        url: "getquestiondetail.php",             
        dataType: "json",   //expect html to be returned                
        success: function(response){                    
             
        //alert(response);
        $('input[name=group1]').prop("disabled",false);
        $('input[name="group1"]').attr('checked', false);

        $("#qid").val(response[0]);//display question

        $("#question").text(response[1]);//display question
        $("#group0").show();//display radio button
        $("#group1").show();//display radio button
        $("#group2").show();//display radio button
        $("#group3").show();//display radio button
        $("#ans0").text(response[2]);//display radio button text
        $("#ans1").text(response[3]);//display radio button text
        $("#ans2").text(response[4]);//display radio button text
        $("#ans3").text(response[5]);//display radio button text
        $("#cor_answer").val(response[6]);//correct answer
       $("#ans0").css("color","black");
        $("#p0").text("");
        $("#ans1").css("color","black");
        $("#p1").text("");
        $("#ans2").css("color","black");
        $("#p2").text("");
        $("#ans3").css("color","black");
        $("#p3").text("");
        
        
        
        

        
        }});

}

$(document).ready(function(){
  $('input[name=group1]').click(function(){
   //alert("The paragraph was clicked.");
   //alert($(this).val());
    //reset all the options text colors
   $('input[name=group1]').prop("disabled",true);

   var selected_ans = $(this).val();
   var cor_answer = $("#cor_answer").val();
   var userid = $("#userid").val();
   var qid = $("#qid").val();
   
   $("#s"+qid).text("Played");
   $("#q"+qid).removeAttr("onclick");
   $("#col"+qid).css('background-color','green');
   
   
   

   
   if(cor_answer == 0)
                {
                        $("#ans0").css("color","green");
                        $("#p0").text("is correct answer").css("color","green").insertAfter("#ans0");
                        $("#ans1").css("color","red");
                        $("#ans2").css("color","red");
                        $("#ans3").css("color","red");

                }else if(cor_answer == 1)
                {
                        $("#ans1").css("color","green");
                        $("#p1").text("is correct answer").css("color","green").insertAfter("#ans1");
                        $("#ans0").css("color","red");
                        $("#ans2").css("color","red");
                        $("#ans3").css("color","red");

                }else if(cor_answer == 2)
                {
                        $("#ans2").css("color","green");
                        $("#p2").text("is correct answer").css("color","green").insertAfter("#ans2");
                        $("#ans0").css("color","red");
                        $("#ans1").css("color","red");
                        $("#ans3").css("color","red");

                }else if(cor_answer == 3)
                {
                        $("#ans3").css("color","green");
                        $("#p3").text("is correct answer").css("color","green").insertAfter("#ans3");
                        $("#ans0").css("color","red");
                        $("#ans1").css("color","red");
                        $("#ans2").css("color","red");

                }
                
                
                //insert data into the table
                $.ajax({
                    type: "POST",
                    url: "insertplayedquestiondetail.php",
                    data:"user_id="+userid+"&qid="+qid,
                    success: function(data) {
                        
                        
                        
                    },
                });
      
   
   
  });
});


  

