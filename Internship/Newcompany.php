 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../styleindex.css">
     <title>Create New Company</title>
 </head>

 <body>
     <?php
        include_once("../Bar/Navbar.html");
        ?>

     <div class="container">
         <?php
            include_once("../Bar/Leftbar.html");
            ?>

         <div class="add-content">

             <div class="write-post-container1">
                 <div class="student-account">
                     <ul>
                         <h2 style="color: white; margin-bottom:20px;">Company Informations </h2>
                         <form method="post" action="../FunctionPHP/import.php">

                             <div class="Student-box">
                                 <li> Company Name : </li>
                                 <input class="formulaireInput" id="newCompanyName" name="newCompanyName" type="text" placeholder="Company name" required="required">
                             </div>
                             <div class="Student-box">
                                 <li> line of business : </li>
                                 <input class="formulaireInput" id="newCompanyBusiness" name="newCompanyBusiness" type="text" placeholder="Company line of business" required="required">
                             </div>
                             <div class="Student-box">
                                 <li> City : </li>
                                 <input class="formulaireInput" id="newCompanyCity" name="newCompanyCity" type="text" placeholder="Company City" required="required">
                             </div>
                             <div class="Student-box">
                                 <li> Pilot confidence : </li>
                                 <select name="newCompanyConfidence" required="required">
                                     <option value="">Pilot Confidence </option>
                                     <option value="Tres Confiant">Tres Confiant</option>
                                     <option value="Confiant">Confiant</option>
                                     <option value="Peu Confiant">Peu Confiant</option>
                                     <option value="Sans informations">Sans informations</option>
                                 </select>
                             </div>
                             <hr style="margin: 30px 20px;">
                             <h2 style="color: white; margin-bottom:20px;">Internship Informations </h2>
                             <div class="Student-box">
                                 <li> Internship Name : </li>
                                 <input class="formulaireInput" id="internshipName" name="internshipName" type="text" placeholder="Internship Name" required="required">
                             </div>
                             <div class="Student-box">
                                 <li> Skills : </li>
                                 <input class="formulaireInput" id="internshipSkills" name="internshipSkills" type="text" placeholder="Student Skills" required="required">
                             </div>
                             <div class="Student-box">
                                 <li> Compensation : </li>
                                 <input class="formulaireInput" id="internshipCompensation" name="internshipCompensation" type="number" placeholder="Company Compensation" required="required">
                             </div>
                             <div class="Student-box">
                                 <li> Duration : </li>
                                 <input class="formulaireInput" id="internshipDuration" name="internshipDuration" type="text" placeholder="InternShip Duration" required="required">
                             </div>
                             <div class="Student-box">
                                 <li> Date : </li>
                                 <input class="formulaireInput" id="intershipDate" name="internshipDate" type="date" placeholder="InternShip Duration" required="required">
                             </div>
                             <div class="Student-box">
                                 <li></li>
                                 <input id="createInternshipNewCompany" name="createInternshipNewCompany" type="radio" value="1" style="visibility: hidden" checked>
                             </div>
                             <div class="button-box">
                                 <input class="favorite-styled" type="submit" value="Validate">
                                 <input class="favorite-styled" type="reset" value="Reset">
                             </div>
                         </form>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <style>
         .Student-box select {
             font-size: 0.9rem;
             padding: 2px 5px;
             border-radius: 20px;
             width: 100%;
             padding: 10px;
         }
     </style>
     <script src="../Javascriptindex.js"></script>
 </body>