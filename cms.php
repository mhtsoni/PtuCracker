<?php include 'database.php'?>
<?php
include 'database.php';
if($_POST){
$query="SELECT*FROM login WHERE username LIKE '$_POST[username]'";
$ans=mysqli_query($link,$query);
if($row=mysqli_fetch_array($ans)){
if(md5(md5($row['id']).$_POST['password'])==$row['password']){
echo '<head><link rel="stylesheet" href="cms.css"></head>
<body>
<script src="cms.js"></script>
<h1> PTU Cracker
  <small>Upload Videos From To The Site Here</small>
</h1>
<section class="contact-wrap">
  <form method="post" action="loginCheck.php" class="contact-form">
    <div class="col-sm-6">
      <div class="input-block">
        <label for="">Subject</label><br><br>
        <select name="subject" class="form-control">
<option value="Engineering Chemistry">Engineering Chemistry</option>
<option value="Engineering Mathematics-I ">Engineering Mathematics-I </option>
<option value="Elements of Mechanical
Engineering">Elements of Mechanical
Engineering</option>
<option value="Fundamentals of Computer
Programming and IT">Fundamentals of Computer
Programming and IT</option>
<option value="Environmental Science ">Environmental Science </option>
<option value="Engineering Chemistry
Laboratory">Engineering Chemistry
Laboratory</option>
<option value="Engineering Drawing">Engineering Drawing</option>
<option value="Engineering Physics">Engineering Physics</option>
<option value="Engineering Mathematics-II">Engineering Mathematics-II</option>
<option value="Communicative English">Communicative English</option>
<option value="Basic Electrical and
Electronics Engineering">Basic Electrical and
Electronics Engineering</option>
<option value="Human Values and
Professional Ethics ">Human Values and
Professional Ethics</option>
<option value="Engineering Physics
Laboratory ">Engineering Physics
Laboratory </option>
<option value="Communicative English
Laboratory
">Communicative English
Laboratory
</option>
  <option value="Digital Electronics">Digital Electronics</option>
<option value="Data structure &
Algorithms ">Data structure &
Algorithms </option>
<option value="Object Oriented
Programming ">Object Oriented
Programming </option>
<option value="Mathematics-III ">Mathematics-III </option>
<option value="Humanities-I">Humanities-I</option>
<option value="Discrete Mathematics">Discrete Mathematics</option>
<option value="Computer Organization
& Architecture ">Computer Organization
& Architecture </option>
<option value="Operating Systems">Operating Systems</option>
<option value="Design & Analysis of
Algorithms">Design & Analysis of
Algorithms</option>
<option value="Environmental Sciences ">Environmental Sciences </option>
<option value="Signals & Systems">Signals & Systems</option>
<option value="Formal Language &
Automata Theory">Formal Language &
Automata Theory</option>
<option value="Software Engineering">Software Engineering</option>
<option value="Elective-I ">Elective-I </option>
<option value="Constitution of India/
Essence of
IndianTraditional
Knowledge">Constitution of India/
Essence of
IndianTraditional
Knowledge</option>
<option value="Compiler Design">Compiler Design</option>
<option value="Computer Networks">Computer Networks</option>
<option value="Elective-II ">Elective-II </option>
<option value="Elective-III ">Elective-III </option>
<option value="Open Elective-I
(Humanities)">Open Elective-I
(Humanities)</option>
<option value="Elective-IV">Elective-IV</option>
<option value="Elective-V">Elective-V</option>
<option value="Open Elective-II">Open Elective-II</option>
<option value="Artificial
Intelligence">Artificial
Intelligence</option>
<option value="Project-II">Project-II</option>
<option value="Industrial *Training">Industrial *Training</option>
<option value="Elective-VI ">Elective-VI </option>
<option value="Open Elective-III">Open Elective-III</option>
<option value="Open Elective-IV">Open Elective-IV</option>
<option value="Project-III">Project-III</option>
</select>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="input-block">
        <label for="">Chapter</label><br><br>
<select name="chapter" class="form-control">
 
<option value="EM waves & Dielectrics">EM waves & Dielectrics</option>
<option value="Magnetic Materials & Superconductivity">Magnetic Materials & Superconductivity</option>
<option value="Elements of crystallography">Elements of crystallography</option>
<option value="Lasers">Lasers</option>
<option value="Fibre Optics">Fibre Optics</option>
<option value="Special Theory of Relativity">Special Theory of Relativity</option>
<option value="Quantum Theory">Quantum Theory</option>
<option value="Nanophysics"></option>
<option value="Differential Calculus">Differential Calculus</option>
<option value="Integral Calculus">Integral Calculus</option>
<option value="Partial Derivatives">Partial Derivatives</option>
<option value="Applications of Partial Differentiation">Applications of Partial Differentiation</option>
<option value="Multiple Integrals">Multiple Integrals</option>
<option value="Vector Calculus">Vector Calculus</option>
<option value="Application of Vector Calculus">Application of Vector Calculus</option>
<option value="Direct Current (DC) Circuits">Direct Current (DC) Circuits</option>
<option value="Alternating Current (AC) Fundamentals">Alternating Current (AC) Fundamentals</option>
<option value="Magnetic Circuits and Transformer">Magnetic Circuits and Transformer</option>
<option value="Rotating Electrical Machines">Rotating Electrical Machines</option>
<option value="Transducers">Transducers</option>
<option value="Semiconductor Devices">Semiconductor Devices</option>
<option value="Digital Electronics"></option>
<option value="Natural Resources">Natural Resources</option>
<option value="Ecosystems">Ecosystems</option>
<option value="Environmental Pollution">Environmental Pollution</option>
<option value="Spectroscopy and its Applications">Spectroscopy and its Applications</option>
<option value=" Photochemistry"> Photochemistry</option>
<option value="Water and its Treatment">Water and its Treatment</option>
<option value="Green Chemistry and its Applications">Green Chemistry and its Applications</option>
<option value="Corrosion and its Prevention">Corrosion and its Prevention</option>
<option value="Polymers and Reinforced Composites">Polymers and Reinforced Composites</option>
<option value="Nanochemistry">Nanochemistry</option>
<option value="Petrochemicals">Petrochemicals</option>
<option value="Ordinary Differential Equations of first order">Ordinary Differential Equations of first order</option>
<option value="Linear Ordinary Differential Equations of second & higher order">Linear Ordinary Differential Equations of second & higher order</option>
<option value=" Applications of Ordinary Differential Equations "> Applications of Ordinary Differential Equations </option>
<option value="Linear Algebra">Linear Algebra</option>
<option value="Infinite Series">Infinite Series</option>
<option value="Complex Numbers and elementary functions of complex variable ">Complex Numbers and elementary functions of complex variable </option>
<option value=". Basic Concepts of Thermodynamics">. Basic Concepts of Thermodynamics</option>
<option value="First Law of Thermodynamics and its applications ">First Law of Thermodynamics and its applications </option>
<option value="Second Law of Thermodynamics">Second Law of Thermodynamics</option>
<option value="Gas Power Cycles">Gas Power Cycles</option>
<option value="Engineering Materials">Engineering Materials</option>
<option value="Centroid, Centre of Gravity and Moment of Inertia">Centroid, Centre of Gravity and Moment of Inertia</option>
<option value="Introduction to Computers ">Introduction to Computers </option>
<option value="Working Knowledge of Computer System ">Working Knowledge of Computer System </option>
<option value="Problem Solving & Program Planning ">Problem Solving & Program Planning </option>
<option value="Overview of C++ Language">Overview of C++ Language</option>
<option value="Operators and expressions ">Operators and expressions </option>
<option value="Beginning with C++ program ">Beginning with C++ program </option>
<option value="Control Structures ">Control Structures </option>
<option value="Functions">Functions</option>
<option value="Arrays and Strings ">Arrays and Strings </option>
<option value="Concepts of Object Oriented Programming ">Concepts of Object Oriented Programming </option>
<option value=" Classes and Objects "> Classes and Objects </option>
<option value="Basics of File Handling ">Basics of File Handling </option>
<option value="Course Introduction - Need, Basic Guidelines, Content and Process for
Value Education ">Course Introduction - Need, Basic Guidelines, Content and Process for
Value Education </option>
<option value="Understanding Harmony in the Human Being - Harmony in Myself! ">Understanding Harmony in the Human Being - Harmony in Myself! </option>
<option value=". Understanding Harmony in the Family and Society- Harmony in HumanHuman
Relationship">. Understanding Harmony in the Family and Society- Harmony in HumanHuman
Relationship</option>
<option value="Understanding Harmony in the Nature and Existence - Whole existence
as Co-existence">Understanding Harmony in the Nature and Existence - Whole existence
as Co-existence</option>
<option value="Implications of the above Holistic Understanding of Harmony on
Professional Ethics">Implications of the above Holistic Understanding of Harmony on
Professional Ethics</option>
</select>      </div>
    </div>
    <div class="col-sm-12">
      <div class="input-block">
        <label for="">Title Of Video</label><br><br>
        <input style="border:2px solid black;" name="title" type="text" class="form-control">
      </div>
    </div>
    <div class="col-sm-12">
      <div class="input-block">
        <label for="">Year</label><br><br>
        <select name="year" class="form-control">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
</select>
      </div>
    </div>
    <div class="col-sm-12">
      <div class="input-block textarea">
        <label for="">Link</label><br><br>
        
        <input style="border:2px solid black;" name="link" type="text" class="form-control">
      </div>
    </div>
    <div class="col-sm-12">
      <button class="square-button">Send</button><a href="index.php">
    </div>
  </form>
  <a href="index.php"><button style="background-color:black; border: 2px solid black; color:white;">LogOut</button></a>
</section>

<!-- follow me template -->
<div class="made-with-love">
  Made with 
  <i>♥</i> by 
  <a target="_blank" href="index.php">Mohit Soni</a>
</div>
</body>';

}
else{
echo "<h2>Incorrect Email Or Password</h2><br>
<a><button style='background-color:black; color:white;'>LogOut</button></a>";
    }
}
}
?>
<script>
history.pushState(null, document.title, location.href);
window.addEventListener('popstate', function (event)
{
  history.pushState(null, document.title, location.href);
});
</script> 
    
    