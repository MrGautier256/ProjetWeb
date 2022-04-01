 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../styleindex.css">
     <link rel="manifest" href="../manifest.json">
     <title>Create New Company</title>
 </head>

 <body>
     <?php
        include_once("../Const.php");
        include_once("../Bar/Navbar.php");
        ?>

     <section class="container">
         <?php
            include_once("../Bar/Leftbar.php");
            ?>

         <section class="add-content">

             <section class="write-post-container1">
                 <article class="student-account">
                     <ul>
                         <h2 style="color: white; margin-bottom:20px;">Company Informations </h2>
                         <form id="CreateNewCompany" method="post" action="../FunctionPHP/import.php">

                             <article class="Student-box">
                                 <li> Company Name : </li>
                                 <input class="formulaireInput" id="newCompanyName" name="newCompanyName" type="text" placeholder="Company name" required="required">
                             </article>
                             <article class="Student-box">
                                 <li> line of business : </li>
                                 <input class="formulaireInput" id="newCompanyBusiness" name="newCompanyBusiness" type="text" placeholder="Company line of business" required="required">
                             </article>
                             <article class="Student-box">
                                 <li> City : </li>
                                 <input class="formulaireInput" id="newCompanyCity" name="newCompanyCity" type="text" placeholder="Company City" required="required">
                             </article>
                             <article class="Student-box">
                                 <li> Pilot confidence : </li>
                                 <select name="newCompanyConfidence" required="required">
                                     <option value="">Pilot Confidence </option>
                                     <option value="Tres Confiant">Tres Confiant</option>
                                     <option value="Confiant">Confiant</option>
                                     <option value="Peu Confiant">Peu Confiant</option>
                                     <option value="Sans informations">Sans informations</option>
                                 </select>
                             </article>
                             <hr style="margin: 30px 20px;">
                             <h2 style="color: white; margin-bottom:20px;">Internship Informations </h2>
                             <article class="Student-box">
                                 <li> Internship Name : </li>
                                 <input class="formulaireInput" id="internshipName" name="internshipName" type="text" placeholder="Internship Name" required="required">
                             </article>
                             <article class="Student-box">
                                 <li> Skills : </li>
                                 <input class="formulaireInput" id="internshipSkills" name="internshipSkills" type="text" placeholder="Student Skills" required="required">
                             </article>
                             <article class="Student-box">
                                 <li> Compensation : </li>
                                 <input class="formulaireInput" id="internshipCompensation" name="internshipCompensation" type="number" placeholder="Company Compensation" required="required">
                             </article>
                             <article class="Student-box">
                                 <li> Duration : </li>
                                 <input class="formulaireInput" id="internshipDuration" name="internshipDuration" type="text" placeholder="InternShip Duration" required="required">
                             </article>
                             <article class="Student-box">
                                 <li> Date : </li>
                                 <input class="formulaireInput" id="intershipDate" name="internshipDate" type="date" placeholder="InternShip Duration" required="required">
                             </article>
                             <article class="Student-box">
                                 <li></li>
                                 <input id="createInternshipNewCompany" name="createInternshipNewCompany" type="radio" value="1" style="visibility: hidden" checked>
                             </article>
                             <article class="button-box">
                                 <input class="favorite-styled" type="submit" value="Validate">
                                 <input class="favorite-styled" type="reset" value="Reset">
                             </article>
                         </form>
                     </ul>
                 </article>
             </section>
         </section>
     </section>

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