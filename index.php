<?php /* Template Name: Survey Form */ ?>
<?php get_header(); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Survey Form</title>
      <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">-->
      <title>Survey Form</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   </head>
   <body>
     

<style type="text/css">
   #register_form fieldset:not(:first-of-type) {
   display: none;
   }
</style>
<div class="container">
   <h2>EL8 Consulting Survey Form</h2>
   <div class="progress">
      <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
   </div>
   <div class="alert alert-success hide"></div>
   <form id="register_form" action="https://el8consulting.ca/wp-content/themes/insurigo/survey-form/submit.php"  method="post">
      <fieldset>
         <h2>Step 1: User Details</h2>
         <div class="row">
            <div class="col-md-6">
               <div class="form-group">
                  <label for="name">1. Name:</label>
                  <input type="text" class="form-control" required id="name" name="name">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="name">Last Name:</label>
                  <input type="text" class="form-control" required id="lastname" name="lastname" >
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="email">2. Email:</label>
                  <input type="email" class="form-control" required id="email" name="email">
               </div>
            </div>
            <div class="col-md-6">
               <div class="form-group">
                  <label for="name">Phone:</label>
                  <input type="text" class="form-control" required id="phone" name="phone">
               </div>
            </div>
            <div class="col-md-12">
            </div>
            <!-- workforce strength start -->
         </div>
         <input type="button" class="next-form btn btn-info" value="Next" />
      </fieldset>
      <fieldset>
         <h2> Step 2: Answer the Questions</h2>
         <!-- workforce strength start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>3. What is the workforce strength in your organization?</label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="workforce" id="workforce1" value="10-500 employees" required>
                  <label class="form-check-label" for="workforce1">10-500 employees</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="workforce" id="workforce2" value="501 – 1000 employees">
                  <label class="form-check-label" for="workforce2">501 – 1000 employees</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="workforce" id="workforce3" value="1000-10000 employees">
                  <label class="form-check-label" for="workforce3">1000-10000 employees</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="workforce" id="workforce4" value="10000 employees and above">
                  <label class="form-check-label" for="workforce4">10000 employees and above</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="workforce" id="workforceOthers" value="Others">
                  <label class="form-check-label" for="workforceOthers">Others</label>
                  <!-- Text box for Others option -->
                  <input type="text" class="form-control" id="workforceOthersText" name="workforceOthersText" style="display: none;">
               </div>
            </div>
         </div>
         <!-- workforce strength end -->
         <!-- role in your L&D organization Start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>4. What is your role in your L&D organization?</label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" id="role1" value="Build Strategies for L&D Organization" required>
                  <label class="form-check-label" for="role1">Build Strategies for L&D Organization</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" id="role2" value="Content Development" required>
                  <label class="form-check-label" for="role2">Content Development</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" id="role3" value="Consulting" required>
                  <label class="form-check-label" for="role3">Consulting</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" id="role4" value="Delivery and Operations" required>
                  <label class="form-check-label" for="role4">Delivery and Operations</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" id="role5" value="Vendor management" required>
                  <label class="form-check-label" for="role5">Vendor management</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" id="role6" value="Solution Design" required>
                  <label class="form-check-label" for="role6">Solution Design</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" id="role7" value="Instructional Designer" required>
                  <label class="form-check-label" for="role7">Instructional Designer</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" id="role8" value="Technology and Platforms" required>
                  <label class="form-check-label" for="role8">Technology and Platforms</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" id="role9" value="Facilitator/Coach" required>
                  <label class="form-check-label" for="role9">Facilitator/Coach</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="role" id="roleOthers" value="Others">
                  <label class="form-check-label" for="roleOthers">Others</label>                          
                  <input type="text" class="form-control" id="roleOthersText" name="roleOthersText" style="display: none;">
               </div>
            </div>
         </div>
         <!-- role in your L&D organization end -->
         <!--  Which one is the most critical challenge for L&D Leadership? Start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>5. Which one is the most critical challenge for L&D Leadership? *</label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="leadership" id="roled1" value="Demonstrating the impact of talent development on business" required>
                  <label class="form-check-label" for="roled1">Demonstrating the impact of talent development on business</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="leadership" id="roled2" value="Meeting the learning appetite of my diverse learners">
                  <label class="form-check-label" for="roled2">Meeting the learning appetite of my diverse learners</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="leadership" id="roled3" value="Developing the talent of all my employees with an optimal budget">
                  <label class="form-check-label" for="roled3">Developing the talent of all my employees with an optimal budget</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="leadership" id="roled4" value="Making talent development a pull strategy">
                  <label class="form-check-label" for="roled4">Making talent development a pull strategy</label>
               </div>
            </div>
         </div>
         <!--  Which one is the most critical challenge for L&D Leadership? end -->
         <!-- L&D professional Start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>6. As an L&D professional, how do you prioritize the following? *</label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="prioritize" id="roled5" value="Business Centric Talent Development Strategy" required>
                  <label class="form-check-label" for="roled5">Business Centric Talent Development Strategy</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="prioritize" id="roled6" value="Personalized Learning Solutions">
                  <label class="form-check-label" for="roled6">Personalized Learning Solutions</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="prioritize" id="roled7" value="Build a Learning Culture">
                  <label class="form-check-label" for="roled7">Build a Learning Culture</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="prioritize" id="roled8" value="Scalable Learning Solutions">
                  <label class="form-check-label" for="roled8">Scalable Learning Solutions</label>
               </div>
            </div>
			
         </div>
		 <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
		 <input type="button" name="next" class="next-form btn btn-info" value="Next" />
         <!-- L&D professional end -->	         
      </fieldset>

      <fieldset>
         <h2> Step 3: Answer the Questions</h2>
         <!--Where do you see the use of AI currently and/or in the future?  Start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>7. Where do you see the use of AI currently and/or in the future? *</label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="future" id="rolee1" value="Content Creation" required>
                  <label class="form-check-label" for="rolee1">Content Creation</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="future" id="rolee2" value="AI Powered mentoring/tutoring">
                  <label class="form-check-label" for="rolee2">AI Powered mentoring/tutoring</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="future" id="rolee3" value="Personalized Learning">
                  <label class="form-check-label" for="rolee3">Personalized Learning</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="future" id="rolee4" value="Adaptive Knowledge Testing">
                  <label class="form-check-label" for="rolee4">Adaptive Knowledge Testing</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="future" id="rolee5" value="Knowledge Management">
                  <label class="form-check-label" for="rolee5">Knowledge Management</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="future" id="rolee6" value="LMS">
                  <label class="form-check-label" for="rolee6">LMS</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="future" id="rolee7" value="Immersive experiential learning solutions with Conversational AI">
                  <label class="form-check-label" for="rolee7">Immersive experiential learning solutions with Conversational AI</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="future" id="roleOthers1" value="Others">
                  <label class="form-check-label" for="roleOthers1">Others</label>
                  <!-- Text box for Others option -->
                  <input type="text" class="form-control" id="roleOthersText1" name="roleOthersText1" style="display: none;">
               </div>
            </div>
         </div>
         <!--Where do you see the use of AI currently and/or in the future?  End -->
         <!--How do you think AI is disrupting L&D jobs?  Start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>8. How do you think AI is disrupting L&D jobs? *</label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="jobs" id="rolef1" value="Demand for faster and personalized learning will increase" required>
                  <label class="form-check-label" for="rolef1">Demand for faster and personalized learning will increase</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="jobs" id="rolef2" value="Transmedia content will increase">
                  <label class="form-check-label" for="rolef2">Transmedia content will increase</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="jobs" id="rolef3" value="Increased investment in automation tools and reduced run cost (people)">
                  <label class="form-check-label" for="rolef3">Increased investment in automation tools and reduced run cost (people)</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="jobs" id="rolef4" value="Need for immersive learning experiences like VR, XR, simulations with conversational AI, etc.">
                  <label class="form-check-label" for="rolef4">Need for immersive learning experiences like VR, XR, simulations with conversational AI, etc.</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="jobs" id="rolef5" value="Skill based learning will be prioritized over knowledge-based training">
                  <label class="form-check-label" for="rolef5">Skill based learning will be prioritized over knowledge-based training</label>
               </div>
            </div>
         </div>
         <!--How do you think AI is disrupting L&D jobs?  End -->
         <!-- What do you think are the future skills needed by L&D professionals? start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>9. What do you think are the future skills needed by L&D professionals? *</label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="skills" id="roleg1" value="Performance consulting" required>
                  <label class="form-check-label" for="roleg1">Performance consulting</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="skills" id="roleg2" value="Data Modelling">
                  <label class="form-check-label" for="roleg2">Data Modelling</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="skills" id="roleg3" value="Learning Analytics to make data-based decisions">
                  <label class="form-check-label" for="roleg3">Learning Analytics to make data-based decisions</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="skills" id="roleg4" value="Learner-centered design thinking">
                  <label class="form-check-label" for="roleg4">Learner-centered design thinking</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="skills" id="roleg5" value="Using technology in content creation & assembly, learning management, coaching, designing learning path, etc.">
                  <label class="form-check-label" for="roleg5">Using technology in content creation & assembly, learning management, coaching, designing learning path, etc.</label>
               </div>
            </div>
         </div>

		 <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
		 <input type="button" name="next" class="next-form btn btn-info" value="Next" />
         <!-- What do you think are the future skills needed by L&D professionals? end -->
      </fieldset>

      <fieldset>
         <h2> Step 3: Answer the Questions</h2>
         <!--In your experience, what are the 5 most effective learning modes ?  start -->
               <div class="col-md-12">
                  <div class="form-group">
                     <label>10. In your experience, what are the 5 most effective learning modes ?*</label><br>
                     <div class="card">
                        <div class="table-responsive">
                           <table class="table">
                              <thead class="thead-light">
                                 <tr>
                                    <th>
                                       <label class="customcheckbox m-b-20">
                                       5 most effective learning modes
                                       </label>
                                    </th>
                                    <th scope="col">Senior Leadership</th>
                                    <th scope="col">Mid-level Managers</th>
                                    <th scope="col">Junior Level Employees</th>
                                 </tr>
                              </thead>
                              <tbody class="customtable">
                                 <tr>
                                    <th>
                                       <label class="customcheckbox">
                                       Just-in-time video learning nuggets
                                       </label>
                                    </th>
                                    <td><input class="form-check-input" type="radio" id="most1" name="q1" value="Senior Leadership"></td>
                                    <td><input class="form-check-input" type="radio" id="most1" name="q1" value="Mid-level Managers"></td>
                                    <td><input class="form-check-input" type="radio" id="most1" name="q1" value="Junior Level Employees"></td>
                                 </tr>
                                 <tr>
                                    <th>
                                       <label class="customcheckbox">
                                       eLearning
                                       </label>
                                    </th>
                                    <td><input class="form-check-input" type="radio" id="most2" name="q2" value="Senior Leadership"></td>
                                    <td><input class="form-check-input" type="radio" id="most2" name="q2" value="Mid-level Managers"></td>
                                    <td><input class="form-check-input" type="radio" id="most2" name="q2" value="Junior Level Employees"></td>
                                 </tr>
                                 <tr>
                                    <th>
                                       <label class="customcheckbox">
                                       In-person Classroom
                                       </label>
                                    </th>
                                    <td><input class="form-check-input" type="radio" id="most3" name="q3" value="Senior Leadership"></td>
                                    <td><input class="form-check-input" type="radio" id="most3" name="q3" value="Mid-level Managers"></td>
                                    <td><input class="form-check-input" type="radio" id="most3" name="q3" value="Junior Level Employees"></td>
                                 </tr>
                                 <tr>
                                    <th>
                                       <label class="customcheckbox">
                                       Coaching
                                       </label>
                                    </th>
                                    <td><input class="form-check-input" type="radio" id="most4" name="q4" value="Senior Leadership"></td>
                                    <td><input class="form-check-input" type="radio" id="most4" name="q4" value="Mid-level Managers"></td>
                                    <td><input class="form-check-input" type="radio" id="most4" name="q4" value="Junior Level Employees"></td>
                                 </tr>
                                 <tr>
                                    <th>
                                       <label class="customcheckbox">
                                       Mobile enabled learning
                                       </label>
                                    </th>
                                    <td><input class="form-check-input" type="radio" id="most5" name="q5" value="Senior Leadership"></td>
                                    <td><input class="form-check-input" type="radio" id="most5" name="q5" value="Mid-level Managers"></td>
                                    <td><input class="form-check-input" type="radio" id="most5" name="q5"></td>
                                 </tr>
                                 <tr>
                                    <th>
                                       <label class="customcheckbox">
                                       Digital Adoption Platforms
                                       </label>
                                    </th>
                                    <td><input class="form-check-input" type="radio" id="most6" name="q6" value="Senior Leadership"></td>
                                    <td><input class="form-check-input" type="radio" id="most6" name="q6" value="Mid-level Managers"></td>
                                    <td><input class="form-check-input" type="radio" id="most6" name="q6" value="Junior Level Employees"></td>
                                 </tr>
                                 <tr>
                                    <th>
                                       <label class="customcheckbox">
                                       VR/XR/AR
                                       </label>
                                    </th>
                                    <td><input class="form-check-input" type="radio" id="most7" name="q7" value="Senior Leadership"></td>
                                    <td><input class="form-check-input" type="radio" id="most7" name="q7" value="Mid-level Managers"></td>
                                    <td><input class="form-check-input" type="radio" id="most7" name="q7" value="Junior Level Employees"></td>
                                 </tr>
                                 <tr>
                                    <th>
                                       <label class="customcheckbox">
                                       Virtual Classroom
                                       </label>
                                    </th>
                                    <td><input class="form-check-input" type="radio" id="most8" name="q8" value="Senior Leadership"></td>
                                    <td><input class="form-check-input" type="radio" id="most8" name="q8" value="Mid-level Managers"></td>
                                    <td><input class="form-check-input" type="radio" id="most8" name="q8" value="Junior Level Employees"></td>
                                 </tr>
                                 <tr>
                                    <th>
                                       <label class="customcheckbox">
                                       Fireside Chats
                                       </label>
                                    </th>
                                    <td><input class="form-check-input" type="radio" id="most9" name="q9" value="Senior Leadership"></td>
                                    <td><input class="form-check-input" type="radio" id="most9" name="q9" value="Mid-level Managers"></td>
                                    <td><input class="form-check-input" type="radio" id="most9" name="q9" value="Junior Level Employees"></td>
                                 </tr>
                                 <tr>
                                    <th>
                                       <label class="customcheckbox">
                                       Discussion Forms – Small group coaching
                                       </label>
                                    </th>
                                    <td><input class="form-check-input" type="radio" id="most10" name="q10" value="Senior Leadership"></td>
                                    <td><input class="form-check-input" type="radio" id="most10" name="q10" value="Mid-level Managers"></td>
                                    <td><input class="form-check-input" type="radio" id="most10" name="q10" value="Junior Level Employees"></td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
           
         </div>
		  <!--In your experience, what are the 5 most effective learning modes ?  End -->
		  <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
			<input type="button" name="next" class="next-form btn btn-info" value="Next" />

		         
      </fieldset>
      <fieldset>
         <h2> Step 3: Answer the Questions</h2>
         <!-- With the rapidly changing learner preference, what do you think brings out the maximum learning effectiveness in the digital era? start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>11. With the rapidly changing learner preference, what do you think brings out the maximum learning effectiveness in the digital era? *</label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="learningEffectiveness" id="learningEffectiveness1" value="Dedicated group learning" required>
                  <label class="form-check-label" for="learningEffectiveness1">Dedicated group learning</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="learningEffectiveness" id="learningEffectiveness2" value="Self-driven individual learning plan">
                  <label class="form-check-label" for="learningEffectiveness2">Self-driven individual learning plan</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="learningEffectiveness" id="learningEffectiveness3" value="Learning in the flow of work">
                  <label class="form-check-label" for="learningEffectiveness3">Learning in the flow of work</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="learningEffectiveness" id="learningEffectiveness4" value="Others">
                  <label class="form-check-label" for="learningEffectiveness4">Others</label>
                  <!-- Text box for Others option -->
                  <input type="text" class="form-control" id="learningEffectivenessOthersText" name="learningEffectivenessOthersText" style="display: none;">
               </div>
            </div>
         </div>
          <!--With the rapidly changing learner preference, what do you think brings out the maximum learning effectiveness in the digital era? End -->
          <!--What are the talent development challenges that you foresee with hybrid/remote workforce? start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>12. What are the talent development challenges that you foresee with hybrid/remote workforce? *</label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="challenges" id="talentDevelopmentChallenges1" value="Less access to coaching, mentoring, and networking" required>
                  <label class="form-check-label" for="talentDevelopmentChallenges1">Less access to coaching, mentoring, and networking</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="challenges" id="talentDevelopmentChallenges2" value="Lesser motivation to make time for learning and self-development.">
                  <label class="form-check-label" for="talentDevelopmentChallenges2">Lesser motivation to make time for learning and self-development.</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="challenges" id="talentDevelopmentChallenges3" value="It's tougher to gauge learning transfer and impact">
                  <label class="form-check-label" for="talentDevelopmentChallenges3">It's tougher to gauge learning transfer and impact</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="challenges" id="talentDevelopmentChallengesOthers" value="Others">
                  <label class="form-check-label" for="talentDevelopmentChallengesOthers">Others</label>
                   Text box for Others option 
                  <input type="text" class="form-control" id="talentDevelopmentChallengesOthersText" name="talentDevelopmentChallengesOthersText" style="display: none;">
               </div>
            </div>
         </div>
         <!-- What are the talent development challenges that you foresee with hybrid/remote workforce? End -->
         <!-- How much time should organizations encourage employees to spend on their talent development in a year? start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>13. How much time should organizations encourage employees to spend on their talent development in a year? *</label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="talentDevelopmentTime" id="talentDevelopmentTime1" value="30-40 hours" required>
                  <label class="form-check-label" for="talentDevelopmentTime1">30-40 hours</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="talentDevelopmentTime" id="talentDevelopmentTime2" value="20-30 hours">
                  <label class="form-check-label" for="talentDevelopmentTime2">20-30 hours</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="talentDevelopmentTime" id="talentDevelopmentTime3" value="10-20 hours">
                  <label class="form-check-label" for="talentDevelopmentTime3">10-20 hours</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="talentDevelopmentTime" id="talentDevelopmentTime4" value="Less than 10 hours">
                  <label class="form-check-label" for="talentDevelopmentTime4">Less than 10 hours</label>
               </div>
            </div>
         </div>
         <!-- How much time should organizations encourage employees to spend on their talent development in a year? end -->
         <!-- Should learning be mandated? Start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>14. Should learning be mandated? *</label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="learningMandated" id="learningMandated1" value="Yes, for all roles" required>
                  <label class="form-check-label" for="learningMandated1">Yes, for all roles</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="learningMandated" id="learningMandated2" value="Yes, for some roles">
                  <label class="form-check-label" for="learningMandated2">Yes, for some roles</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="learningMandated" id="learningMandated3" value="No, not at all">
                  <label class="form-check-label" for="learningMandated3">No, not at all</label>
               </div>
            </div>
         </div>
         <!-- Should learning be mandated? End -->
         <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
         <input type="button" name="next" class="next-form btn btn-info" value="Next" />
      </fieldset>

      <fieldset>
         <h2> Step 3: Answer the Questions</h2>
         <!-- 15. In your opinion, how much should an organization invest per person per annum for mid-senior leadership development? start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>15. In your opinion, how much should an organization invest per person per annum for mid-senior leadership development?</label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="invest" id="invest1" value="$300-$500" required>
                  <label class="form-check-label" for="invest1">$300-$500</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="invest" id="invest2" value="$500-$1000" required>
                  <label class="form-check-label" for="invest2">$500-$1000</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="invest" id="invest3" value="$1000-$2000" required>
                  <label class="form-check-label" for="invest3">$1000-$2000</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="invest" id="invest4" value="$2000-$3000" required>
                  <label class="form-check-label" for="invest4">$2000-$3000</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="invest" id="invest5" value="More than $3000" required>
                  <label class="form-check-label" for="invest5">More than $3000</label>
               </div>
            </div>
         </div>
         <!-- 15. In your opinion, how much should an organization invest per person per annum for mid-senior leadership development? end -->
         <!-- 16. According to you, which of the following approaches justifies ROI of learning?  start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>16. According to you, which of the following approaches justifies ROI of learning?  </label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="roi" id="roi1" value="Action Learning Projects" required>
                  <label class="form-check-label" for="roi1">Action Learning Projects</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="roi" id="roi2" value="Signing off business metrics that will be impacted by the learning process with the business
                     ">
                  <label class="form-check-label" for="roi2">Signing off business metrics that will be impacted by the learning process with the business</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="roi" id="roi3" value="Completion rates, test scores, participation rates">
                  <label class="form-check-label" for="roi3">Completion rates, test scores, participation rates</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="roi" id="roi4" value="Others">
                  <label class="form-check-label" for="roi4">Others</label>
                  <!-- Text box for Others option -->
                  <input type="text" class="form-control" id="roiothertext" name="roiothertext" style="display: none;">
               </div>
            </div>
         </div>
         <!-- 16.According to you, which of the following approaches justifies ROI of learning?   end -->
         <!-- 17. What will be your approach to keep learning continuously relevant to your organization? start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>17. What will be your approach to keep learning continuously relevant to your organization? </label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="organization" id="organization1" value="Mandated skill gap exercise" required>
                  <label class="form-check-label" for="organization1">Mandated skill gap exercise</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="organization" id="organization2" value="Developing a learning culture">
                  <label class="form-check-label" for="organization2">Developing a learning culture</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="organization" id="organization3" value="Use AI to develop personalized learning based on individual learning signature">
                  <label class="form-check-label" for="organization3">Use AI to develop personalized learning based on individual learning signature</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="organization" id="organization4" value="Others">
                  <label class="form-check-label" for="organization4">Others</label>
                  <input type="text" class="form-control" id="organizationtext" name="organizationtext" style="display: none;">
               </div>
            </div>
         </div>
         <!-- 17. What will be your approach to keep learning continuously relevant to your organization?  end -->
         <!-- 18. What will be your approach to keep learning continuously relevant to your organization? start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>18. Please prioritize the following data you are currently using in your L&D organization.</label><br>
               <div class="ranking-container">
                  <ul id="sortable">
                     <li id="item1" name="priority1" value="Skill gap analysis">Skill gap analysis</li>
                     <li id="item2" name="priority2" value="Learner preferences">Learner preferences</li>
                     <li id="item3" name="priority3" value="Learning consumption">Learning consumption</li>
                     <li id="item4" name="priority4" value="Program feedback">Program feedback</li>
                     <li id="item5" name="priority5" value="ROI of learning">ROI of learning</li>
                  </ul>
               </div>
            </div>
         </div>
         <!-- 18. What will be your approach to keep learning continuously relevant to your organization?  end -->
         <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
         <input type="button" name="next" class="next-form btn btn-info" value="Next" />
	
      </fieldset>
      <fieldset>
         <h2>Step 3: Add Contact Information</h2>
         <!-- In your experience of working with business leaders, how do they perceive this statement “Talent is Revenue”? Start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>19. In your experience of working with business leaders, how do they perceive this statement “Talent is Revenue”? </label><br>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="talentrevenue" id="talentrevenue1" value="Fully agree" required>
                  <label class="form-check-label" for="talentrevenue1">Fully agree</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="talentrevenue" id="talentrevenue2" value="Cannot relate talent development to revenue">
                  <label class="form-check-label" for="talentrevenue2">Cannot relate talent development to revenue</label>
               </div>
               <div class="form-check">
                  <input class="form-check-input" type="radio" name="talentrevenue" id="talentrevenue3" value="Agree that skilling helping in productivity gains but cannot attribute it to revenue">
                  <label class="form-check-label" for="talentrevenue3">Agree that skilling helping in productivity gains but cannot attribute it to revenue</label>
               </div>
            </div>
         </div>
         <!-- In your experience of working with business leaders, how do they perceive this statement “Talent is Revenue”?  End -->
         <!-- In your experience of working with business leaders, how do they perceive this statement “Talent is Revenue”? Start -->
         <div class="col-md-12">
            <div class="form-group">
               <label>20. Please share your thoughts on how to see L&D organizations, 5 years from now?</label><br>
               <div class="form-check">
                  <textarea class="text-response" name="comments" placeholder="Enter some text for the paragraph..."></textarea>
               </div>
            </div>
         </div>
         <!-- In your experience of working with business leaders, how do they perceive this statement “Talent is Revenue”?  End -->
		 
			<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
			<input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
		         
      </fieldset>
   </form>

   <style>
         .ranking-container {
         width: 300px;
         }
         #sortable {
         list-style-type: none;
         padding: 0;
         }
         #sortable li {
         background-color: #f4f4f4;
         padding: 10px;
         margin: 5px 0;
         cursor: pointer;
         }
         table th {
         background: #25826a;
         color: #000;
         padding: 10px;
         }
         .customtable input {
         text-align: center !important;
         margin-left: auto !important;
         margin-right: auto !important;
         display: block;
         position: relative;
         }
      </style>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <!-- jQuery -->
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <!-- jQuery UI -->
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
      <!-- Your custom script -->
   <script>
         $( function() {
           $( "#sortable" ).sortable();
           $( "#sortable" ).disableSelection();
         } );
      </script>
      <!-- JavaScript to show/hide text input for Others option -->
      <script>
         document.addEventListener("DOMContentLoaded", function() {
             const roleOthers = document.getElementById("roleOthers1");
             const roleOthersText = document.getElementById("roleOthersText1");
         
             roleOthers.addEventListener("change", function() {
                 if (roleOthers.checked) {
                     roleOthersText.style.display = "block";
                 } else {
                     roleOthersText.style.display = "none";
                 }
             });
         });
         
         document.addEventListener("DOMContentLoaded", function() {
             const roleOthers = document.getElementById("learningEffectiveness4");
             const roleOthersText = document.getElementById("learningEffectivenessOthersText");
         
             roleOthers.addEventListener("change", function() {
                 if (roleOthers.checked) {
                     roleOthersText.style.display = "block";
                 } else {
                     roleOthersText.style.display = "none";
                 }
             });
         });
         
         document.addEventListener("DOMContentLoaded", function() {
             const roleOthers = document.getElementById("talentDevelopmentChallengesOthers");
             const roleOthersText = document.getElementById("talentDevelopmentChallengesOthersText");
         
             roleOthers.addEventListener("change", function() {
                 if (roleOthers.checked) {
                     roleOthersText.style.display = "block";
                 } else {
                     roleOthersText.style.display = "none";
                 }
             });
         });
         
         document.addEventListener("DOMContentLoaded", function() {
             const roleOthers = document.getElementById("roleOthers");
             const roleOthersText = document.getElementById("roleOthersText");
         
             roleOthers.addEventListener("change", function() {
                 if (roleOthers.checked) {
                     roleOthersText.style.display = "block";
                 } else {
                     roleOthersText.style.display = "none";
                 }
             });
         });
         
          document.addEventListener("DOMContentLoaded", function() {
             const roleOthers = document.getElementById("organization4");
             const roleOthersText = document.getElementById("organizationtext");
         
             roleOthers.addEventListener("change", function() {
                 if (roleOthers.checked) {
                     roleOthersText.style.display = "block";
                 } else {
                     roleOthersText.style.display = "none";
                 }
             });
         });
         
          document.addEventListener("DOMContentLoaded", function() {
             const roleOthers = document.getElementById("roi4");
             const roleOthersText = document.getElementById("roiothertext");
         
             roleOthers.addEventListener("change", function() {
                 if (roleOthers.checked) {
                     roleOthersText.style.display = "block";
                 } else {
                     roleOthersText.style.display = "none";
                 }
             });
         });
         
         document.addEventListener("DOMContentLoaded", function() {
             const roleOthers = document.getElementById("workforceOthers");
             const roleOthersText = document.getElementById("workforceOthersText");
         
             roleOthers.addEventListener("change", function() {
                 if (roleOthers.checked) {
                     roleOthersText.style.display = "block";
                 } else {
                     roleOthersText.style.display = "none";
                 }
             });
         });
      </script>
	  <script>
$(document).ready(function() {
    var form_count = 1,
        previous_form,
        next_form,
        total_forms;
    total_forms = $("fieldset").length;

    $(".next-form").click(function() {
        // Validate the current step before proceeding
        if (validateCurrentStep()) {
            previous_form = $(this).parent();
            next_form = $(this).parent().next();
            next_form.show();
            previous_form.hide();
            setProgressBarValue(++form_count);
        }
    });

    $(".previous-form").click(function() {
        previous_form = $(this).parent();
        next_form = $(this).parent().prev();
        next_form.show();
        previous_form.hide();
        setProgressBarValue(--form_count);
    });

    setProgressBarValue(form_count);

    function setProgressBarValue(value) {
        var percent = parseFloat(100 / total_forms) * value;
        percent = percent.toFixed();
        $(".progress-bar")
            .css("width", percent + "%")
            .html(percent + "%");
    }

    // Function to validate the current step
    function validateCurrentStep() {
        var currentForm = $("fieldset").eq(form_count - 1);
        var inputs = currentForm.find('input[required], select[required], textarea[required]');
        var isValid = true;

        inputs.each(function() {
            if (!$(this).val()) {
                isValid = false;
                return false; // Break the loop if one invalid input is found
            }
        });

        if (!isValid) {
            // Display error message or handle validation error
            $('.alert-success').removeClass('hide').html("Please fill out all required fields.");
        }

        return isValid;
    }
});


	  </script>
</div>
   </body>
</html>
<?php get_footer(); ?>
