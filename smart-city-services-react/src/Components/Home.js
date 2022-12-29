
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import React, {useState, userEffect} from "react";
import axios from "axios";
//nav
import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';



const Home = () => {

  let[aname, setName] = useState("");
  let[email, setEmail] = useState("");
  let[phone, setPhone] = useState("");
  let[dob, setDob] = useState("");
  let[address, setAddress] = useState("");
  let[password, setPassword] =useState("");
  let[addtype, setAddtype] =useState("");



  const addemp= ()=>{
    var obj = {aname: aname, email: email, phone: phone, dob: dob,address: address, password: password, addtype: addtype};
    // alert (obj.email);
    axios.post("http://127.0.0.1:8000/api/addemp",obj)
    .then(resp=>{
      var hudai = resp.data;
      console.log(hudai);
        
    }).catch(err=>{
        console.log(err);
    });


}

    return(
        <div>
          <div>
           

           <Navbar bg="light" expand="lg">
                 <Container>
                   <Navbar.Brand href="/home">Smart City Services</Navbar.Brand>
                   <Navbar.Toggle aria-controls="basic-navbar-nav" />
                   <Navbar.Collapse id="basic-navbar-nav">
                     <Nav className="me-auto">
                       <Nav.Link href="/home">Home</Nav.Link>
                       <Nav.Link href="/customerdetails">Customer Details</Nav.Link>
                       <NavDropdown title="More" id="basic-nav-dropdown">
                         
                         <NavDropdown.Item href="/employeedetails">
                           Employee Details
                         </NavDropdown.Item>
                        
                         
                         <NavDropdown.Divider />
                         <NavDropdown.Item href="/login">
                           Logout
                         </NavDropdown.Item>
                       </NavDropdown>
                     </Nav>
                   </Navbar.Collapse>
                 </Container>
               </Navbar>
                   </div>
                   {/* navbar */}
          <Form className="loginform">
          <h4>Add Employee</h4>
          
            <hr />
            <Form.Group className="mb-3" controlId="formBasicCheckbox" required="true" >
        <Form.Check type="radio" label="Electrician Employee" name="addtype" value="el_emp" onChange={(e)=>setAddtype(e.target.value)} />
        <Form.Check type="radio" label="Plumber Employee" name="addtype" value="pl_emp" onChange={(e)=>setAddtype(e.target.value)} />
        <Form.Check type="radio" label="Cleaner Employee" name="addtype" value="cl_emp" onChange={(e)=>setAddtype(e.target.value)} />
      </Form.Group>

      <Form.Group className="mb-3" >
        <Form.Label>Name</Form.Label>
        <Form.Control type="text"
        placeholder="Enter Your Name" required="true" name="aname" value={aname} onChange={(e)=>setName(e.target.value)}/>  
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
      
      <Button variant="primary" type="submit" onClick={addemp}>
        Add
      </Button>

    </Form>
        </div>
    )
}
export default Home;