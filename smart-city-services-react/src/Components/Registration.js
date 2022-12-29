
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import React, {useState, userEffect} from "react";
import axios from "axios";
import { Link } from "react-router-dom";
import { useNavigate } from "react-router-dom";


const Registration = () => {

  let[cname, setName] = useState("");
  let[email, setEmail] = useState("");
  let[phone, setPhone] = useState("");
  let[dob, setDob] = useState("");
  let[address, setAddress] = useState("");
  let[password, setPassword] =useState("");
  const navigate=useNavigate();



  const register= (e)=>{
    e.preventDefault();
    var obj = {cname: cname, email: email, phone: phone, dob: dob,address: address, password: password};
    // alert (obj.email);
    axios.post("http://127.0.0.1:8000/api/registration",obj)
    .then(resp=>{
      var hudai = resp.data;
      console.log(hudai);
      navigate("/userreq");
        
    }).catch(err=>{
        console.log(err);
    });


}

    return(
        <div>
          <Form className="loginform">
          <img id='slogo' src="https://www.kindpng.com/picc/m/434-4346523_city-logo-smart-smart-city-logo-png-transparent.png" alt="React Image" />
          <h4>Register</h4>
          
            <hr />
           

      <Form.Group className="mb-3" >
        <Form.Label>Name</Form.Label>
        <Form.Control type="text"
        placeholder="Enter Your Name" required="true" name="cname" value={cname} onChange={(e)=>setName(e.target.value)}/>  
      </Form.Group>
      <Form.Group className="mb-3" controlId="formBasicEmail">
        <Form.Label>Email address</Form.Label>
        <Form.Control type="email" required="true" placeholder="Enter email" name="email" value={email} onChange={(e)=>setEmail(e.target.value)}/>
      </Form.Group>
      <Form.Group className="mb-3" >
        <Form.Label>Phone no</Form.Label>
        <Form.Control type="text" required="true" placeholder="Enter Your Phone no" name="phone" value={phone} onChange={(e)=>setPhone(e.target.value)} />
      </Form.Group>
      <Form.Group className="mb-3" >
        <Form.Label>Date of Birth</Form.Label>
        <Form.Control type="date" required="true" placeholder="Enter Your DOB" name="dob" value={dob} onChange={(e)=>setDob(e.target.value)}/>
      </Form.Group>
      <Form.Group className="mb-3" >
        <Form.Label>Address</Form.Label>
        <Form.Control type="text" required="true" placeholder="Enter Your Address" name="address"  value={address} onChange={(e)=>setAddress(e.target.value)}/>
      </Form.Group>
      <Form.Group className="mb-3" controlId="formBasicPassword">
        <Form.Label>Password</Form.Label>
        <Form.Control type="password" required="true" placeholder="Password"  name="password" value={password} onChange={(e)=>setPassword(e.target.value)}/>
      </Form.Group>
      
      <Button variant="primary" type="submit" onClick={register}>
        Sign Up
      </Button>
      <br />
      <Link to="/login">Already Have An Account? Login here</Link>
    </Form>
        </div>
    )
}
export default Registration;