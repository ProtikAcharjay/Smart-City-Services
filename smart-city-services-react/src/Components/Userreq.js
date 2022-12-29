
import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import React, {useState, userEffect} from "react";
import axios from "axios";
//nav
import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';




const Userreq = () => {


  let[reqtime, setReqtime] = useState("");
  let[address, setAddress] = useState("");

  let[reqtype, setReqtype] =useState("");



  const userrequest= ()=>{
    var obj = { reqtime: reqtime,address: address, reqtype: reqtype};
    // alert (obj.email);
    axios.post("http://127.0.0.1:8000/api/userreq",obj)
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
                   <Navbar.Brand href="/userreq">Smart City Services</Navbar.Brand>
                   <Navbar.Toggle aria-controls="basic-navbar-nav" />
                   <Navbar.Collapse id="basic-navbar-nav">
                     <Nav className="me-auto">
                       <Nav.Link href="/userreq">Home</Nav.Link>
                       <Nav.Link href="/login">Logout</Nav.Link>
                       
                     </Nav>
                   </Navbar.Collapse>
                 </Container>
               </Navbar>
                   </div>
                   {/* navbar */}
          <Form className="loginform">
          <h4>Request Services</h4>
            <hr />
            <Form.Group className="mb-3" controlId="formBasicCheckbox" required="true" >
            <Form.Label>Request Service for</Form.Label>
        <Form.Check type="radio" label="Electrician" name="reqtype" value="el" onChange={(e)=>setReqtype(e.target.value)} />
        <Form.Check type="radio" label="Plumber" name="reqtype" value="pl" onChange={(e)=>setReqtype(e.target.value)} />
        <Form.Check type="radio" label="Cleaner" name="reqtype" value="cl" onChange={(e)=>setReqtype(e.target.value)} />
      </Form.Group>

      
      <Form.Group className="mb-3" >
        <Form.Label>Request Service Date & Time</Form.Label>
        <Form.Control type="datetime-local" required="true" placeholder="Enter Your DOB" name="dob" value={reqtime} onChange={(e)=>setReqtime(e.target.value)}/>
      </Form.Group>
      <Form.Group className="mb-3" >
        <Form.Label>Address</Form.Label>
        <Form.Control type="text" required="true" placeholder="Enter Your Address" name="address"  value={address} onChange={(e)=>setAddress(e.target.value)}/>
      </Form.Group>
      
      
      <Button variant="primary" type="submit" onClick={userrequest}>
        Request
      </Button>

    </Form>
        </div>
    )
}
export default Userreq;