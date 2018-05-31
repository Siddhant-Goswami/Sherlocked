<?php
// Start the session
session_start();
?>
<?php
// Echo session variables that were set on previous page
echo " Team ID : " . $_SESSION["tid"]."<br><br>" ;
echo " POINTS : ". $_SESSION["points"]."<br><br>";
echo " STAGE : ". $_SESSION["stage"];

?>
<html>
    <head>
        <script>
         var points="<?php echo $_SESSION["points"]; ?>";
             var points= parseInt(points); 
            var answer="<?php echo $_SESSION["answer"]; ?>";
   
        
            window.onload=function init(){
                 
                 
                
                 document.getElementById("ip").value=points;
                
                
                 
            }



function fun()
{

var a=document.getElementById("i1").value.toLowerCase();
if(a=="")
{
 alert("At least guess something");
 return false;
}
else if(a==answer)
{
 
 return true;
 
}
else
{
alert("Wrong answer!!");
return false;
}
 

}



           

</script>
<style>
body{
color:white;
}
</style>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
     <body style="background-repeat: no-repeat;" background="require.jpg">
     
      

         <div><br>

           &nbsp;&nbsp;&nbsp; ANSWER: <input name="i1" id="i1" type="text" >  &nbsp;&nbsp;&nbsp; <form method="post" onsubmit="return fun()" ><br> &nbsp;&nbsp;&nbsp; <input type="submit" id="ch" value="check" formaction="/Sher/sher4php.php" formtarget="first" >
           
            
         </div>
     
    </form>
    </body>
</html>
