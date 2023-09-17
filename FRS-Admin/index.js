var nodemailer = require('nodemailer');

var transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: 'navin.it22@bitsathy.ac.in',
    pass: 'shoarjiqqxahmnch'
  }
});



function lp_app()
{
    var mailOptions = {
        from: 'navin.it22@bitsathy.ac.in',
        to: 'mnallathambi3462@gmail.com',
        subject: 'FROM ADMIN REGARDING LESSON PLAN',
        text: 'Your lesson plan is accecpted so u can uplode in student wiki page!'
      };
      
      transporter.sendMail(mailOptions, function(error, info){
        if (error) {
          console.log(error);
        } else {
          console.log('Email sent: ' + info.response);
        }
      });
}
function sendEmail() {
    Email.send({
        Host : "smtp.mailtrap.io",
        Username : "navin.it22@bitsathy.ac.in",
        Password : "shoarjiqqxahmnch",
        To : 'mnallathambi3462@gmail.com',
        From : "navin.it22@bitsathy.ac.in",
        Subject : "REGARDING LESSON PLAN MATERIAL",
        Body : "Your lesson plan is accecpted so u can uplode in student wiki page!"
    }).then(
      message => alert(message)
    );
    }