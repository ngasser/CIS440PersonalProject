CIS440PersonalProject
=====================

###Advanced PHP - Creating A Quiz With a Custom Results Certificate Image

I found an interesting coding tutorial in a PHP/MYSQL book I purchased for help with the Capstone project called "PHP and MYSQL Web Development: Developer's Library 4th Edition" by Luke Welling and Laura Thomson. It utilizes PHP and HTML to create a web-based quiz and then displays customized results onto an image that the user can view in several formats such as .rtf and .pdf. I customized the html quiz/php variables in the scoring code to reflect SCRUM-based content for the CIS440 class and added more questions to be answered. The business value of this functionality is similar to compliance tests that large companies have their employees take annually to maintain legal, compliance, and risk management standards. I've attached screenshots to document the steps in the process. 

**Index.html Steps:**

1. Here is the html code screenshots that will output the quiz to a browser. It will request the user's name and expect them to submit 6 answered questions via radio buttons. ![Quiz HTML](https://github.com/ngasser/CIS440PersonalProject/blob/master/screenshots/quizhtml.JPG)
2. Here are 2 screenshots that shows the quiz displayed in a browser. ![Quiz1](https://github.com/ngasser/CIS440PersonalProject/blob/master/screenshots/quiz1.JPG)

![Quiz2](https://github.com/ngasser/CIS440PersonalProject/blob/master/screenshots/quiz2.JPG)
3. From here the the html button sumits the data to score.php for processing
4. The quiz requires greater than a 65% to pass.

**Score.php Steps:**

1. The php file stores the index HTML radio button inputs and stores them in variables to be compared to the right answers. Each right answer is then added up and an overall quiz percentage is calculated. ![Quiz PHP1](https://github.com/ngasser/CIS440PersonalProject/blob/master/screenshots/quizphp1.JPG)
![Quiz PHP2](https://github.com/ngasser/CIS440PersonalProject/blob/master/screenshots/quizphp2.JPG)
2. Based on the quiz results it will display a pass or fail page to the user. The passing page with have image links to print out a certificate that verifies the user passed along with their score.
3. Here is the results page for failing the quiz. ![Quiz Fail](https://github.com/ngasser/CIS440PersonalProject/blob/master/screenshots/quizfail.JPG)
4. Here is the reult page for passing the quiz. ![Quiz Pass](https://github.com/ngasser/CIS440PersonalProject/blob/master/screenshots/quizpass.JPG)
5. Here is the completed pdf file that displays the customized quiz result. ![Certificate](https://github.com/ngasser/CIS440PersonalProject/blob/master/screenshots/quizpdf.JPG)
