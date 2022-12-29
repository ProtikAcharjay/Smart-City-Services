import { Link } from "react-router-dom";
import React, { useRef } from 'react';
import emailjs from '@emailjs/browser';


const Landing = () => {

    const form = useRef();

  const sendEmail = (e) => {
    e.preventDefault();

    emailjs.sendForm('service_9om2wet', 'template_klhco6i', form.current, '7ADwYCwt-3s80k4j0')
      .then((result) => {
          console.log(result.text);
      }, (error) => {
          console.log(error.text);
      });
  };

    return(
        <div className="landingcl">
            {/* <div className="landing">
            <h1>Welcome to Smart City Services</h1>
            <Link to="/login">Get Started</Link>
            </div> */}
                <div id="landing">
                    <br />
                <h3>Welcome to Smart-City-Services</h3>
                <h6>Smartly Provides Service</h6>

                <hr/>
                <p>Started journey from 2022 and keep involving in a good way. Be a part of our journey & Get easy accessible services we provide.</p>
                <br/>
                <hr/>
                
                <Link to="/login">Get Started</Link>
                    
                
                <hr/>


                <h6>Our Services: </h6>
                <li>Electrician</li>
                <li>Cleaner</li>
                <li>Plumber</li>
                <h6>More comming soon....</h6>
            </div>
        <div className='emailservice'>
            <h3>Contact Us</h3>
            <form ref={form} onSubmit={sendEmail}>
                <label>Name: </label>
                <input id="cf" type="text" name="user_name" />
                <br />
                <label>Email: </label>
                <input id="cf" type="text" name="user_email" />
                <br />
                <label>Message: </label>
                <textarea id="cf2" name="message" />
                <br />
                <input id="cf3" type="submit" value="Send" />
            </form>
        </div>
         
         
        </div>
    )
}
export default Landing;