<?php  
class Shap  
{  
function draw(){}  
}
  
class Circle extends Shap  
{  
function draw()  
{  
print "Circle has been drawn.</br>";  
}  
} 
 
class Triangle extends Shap  
{  
function draw()  
{  
print "Triangle has been drawn.</br>";  
}  
} 
 
class Ellipse extends Shap  
{  
function draw()  
{  
print "Ellipse has been drawn.";  
}  
}  

class Rounds extends Shap  
{  
function draw()  
{  
print "Rounds has been drawn.";  
}  
}   
$Val=array(2);  
  
$Val[0]=new Circle();  
$Val[1]=new Triangle();  
$Val[2]=new Ellipse();  
  
for($i=0;$i<3;$i++)  
{  
$Val[$i]->draw();  
}  
?>  