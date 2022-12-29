// import React, {Components} from "react";
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import { Link } from "react-router-dom";
import React, {useState, userEffect} from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";



const Login = ()=>{
  // let[token, setToken]= useState("");
  let[email, setEmail] = useState("");
  let[password, setPassword] =useState("");
  let[logintype, setLogintype] =useState("");
  const navigate=useNavigate();
  //  navigate('/customerdetails');


  const loginSubmit= (e)=>{
    e.preventDefault();
      var obj = {email: email, password: password, logintype: logintype};
      // alert (obj.email);
      axios.post("http://127.0.0.1:8000/api/login",obj)
      .then(resp=>{
         var datas=resp.data;
            // alert(datas);
            // console.log("datas jhftfhgh");
                if(datas === "adminloggedin"){
                navigate("/home");

                
              }
                if(datas === "emploggedin"){
                // alert(datas);
                // navigate("/home");
                navigate("/Employee");
                
              }
               if(datas === "customerloggedin"){
                navigate("/userreq");
                
                // navigate("/home");
                
              }
                if(datas === "No user found"){
                // navigate("/login");
                alert("Wrong Input");
                
              }
              // if(datas === "No user found"){
              //   navigate("/customerdetails");
                
              // }
              // else{
              //   navigate("/login");
              //     }
        // if(datas==="User Logged in"){
        //   navigate('/customerdetails');
        // }
          // var token = resp.data;
          // console.log(token);
          // var user = {userId: token.userid, access_token:token.token};
          // localStorage.setItem('user',JSON.stringify(user));
          // console.log(localStorage.getItem('user'));
        //   if(token === "go to next page"){
        //     navigate('/customerdetails')
            
        // }else{
        //   navigate('/login')
        // }
          
      }).catch(err=>{
          console.log(err);
      });


  }

    return(
        <div className='bg'>
          
            <Form className="loginform">
            <img id='slogo' src="https://www.kindpng.com/picc/m/434-4346523_city-logo-smart-smart-city-logo-png-transparent.png" alt="React Image" />
            <h4>Login</h4>
            <hr />
      <Form.Group className="mb-3" controlId="formBasicEmail">
        <Form.Label>Email address</Form.Label>
        <Form.Control type="email" required="true" name="email" placeholder="Enter email" value={email} onChange={(e)=>setEmail(e.target.value)}/>
      </Form.Group>

      <Form.Group className="mb-3" controlId="formBasicPassword">
        <Form.Label>Password</Form.Label>
        <Form.Control type="password" required="true" name="password" placeholder="Password" value={password} onChange={(e)=>setPassword(e.target.value)} />
      </Form.Group>
      <Form.Group className="mb-3" controlId="formBasicCheckbox" required="true" >
        <Form.Check type="radio" label="Admin" name="logintype" value="admin" onChange={(e)=>setLogintype(e.target.value)} />
        <Form.Check type="radio" label="Employee" name="logintype" value="employee" onChange={(e)=>setLogintype(e.target.value)} />
        <Form.Check type="radio" label="Customer" name="logintype" value="customer" onChange={(e)=>setLogintype(e.target.value)} />
      </Form.Group>
      <Button variant="primary" type="submit" onClick={loginSubmit}>
        LogIn
      </Button>
<br />
      <Link to="/registration">Don't Have An Account? Create here</Link>
    </Form>
        </div>
    )
}
export default Login;