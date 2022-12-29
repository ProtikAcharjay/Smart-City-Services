import Button from 'react-bootstrap/Button';
import Form from 'react-bootstrap/Form';
import React, {useState, userEffect} from "react";

import axios from "axios";

function EmpCreate()
{ 
    const [cl_name, setNamee] = useState('');
    const [cl_phone, setPhonee] = useState('');
    const [cl_address, setAddresse] = useState('');
    const [cl_dob, setDobe] = useState('');
    const [cl_salary, setSalarye] = useState('');
    const [cl_nid, setNide] = useState('');
    const [cl_joblocation, setJobloce] = useState('');
    const [cl_status, setStatuse] = useState('');
  
    console.log(cl_name);


   const sendDataToAPI = () => {
     

        var obj = {cl_name: cl_name, cl_phone: cl_phone, cl_address: cl_address, cl_dob: cl_dob,cl_salary: cl_salary, cl_nid: cl_nid, cl_joblocation: cl_joblocation,cl_status:cl_status};
       
        axios.post("http://127.0.0.1:8000/api/data", obj)
        .then(resp=>{

            var ep = resp.data;
            
           console.log(ep);
            
           
            
            }).catch(err=>{
            
          console.log(err);
            
           });
        
      }

    return (
            
        <div>

        <Form className="loginform">
          <Form.Group className="mb-3" >
    
        <Form.Label>Name</Form.Label>
          
        <Form.Control type="text" placeholder="Enter  Name" name="cl_name"  onChange={(e) => setNamee(e.target.value)}/>
          
        </Form.Group>
          
          
    <Form.Group className="mb-3" >
          
      <Form.Label>Phone Number</Form.Label>
          
       <Form.Control type="text" placeholder="Enter Your Phone no" name="cl_phone"  onChange={(e) => setPhonee(e.target.value)}/>
       
          
    </Form.Group>

        <Form.Group className="mb-3" >
          
          <Form.Label>Address</Form.Label>
             
         <Form.Control type="text" placeholder="Enter Address" name="cl_address"  onChange={(e) => setAddresse(e.target.value)}/>
             
          </Form.Group>
                
       <Form.Group className="mb-3" >
          
       <Form.Label>Date of Birth</Form.Label>
          
    <Form.Control type="date" placeholder="Enter  DOB" name="cl_dob"  onChange={(e) => setDobe(e.target.value)}/>
          
       </Form.Group>
          
    
       <Form.Group className="mb-3" >
          
          <Form.Label>Salary</Form.Label>
             
       <Form.Control type="text" placeholder="Enter Salary" name="cl_salary"  onChange={(e) => setSalarye(e.target.value)}/>
             
          </Form.Group>
    
          <Form.Group className="mb-3" >
          
          <Form.Label>NID</Form.Label>
             
       <Form.Control type="text" placeholder="Enter NID" name="cl_nid"  onChange={(e) => setNide(e.target.value)}/>
             
          </Form.Group>
          <Form.Group className="mb-3" >
          
          <Form.Label>Job Location</Form.Label>
             
       <Form.Control type="text" placeholder="Enter Salary" name="cl_joblocation"  onChange={(e) => setJobloce(e.target.value)}/>
             
                </Form.Group>
                <Form.Group className="mb-3" >
          
          <Form.Label>Status</Form.Label>
             
       <Form.Control type="text" placeholder="Status" name="cl_status"  onChange={(e) => setStatuse(e.target.value)}/>
             
          </Form.Group>
          
       <Button variant="primary" type="submit"  onClick={sendDataToAPI}>
           Add
          
          </Button>
          
          
          
            </Form>
            </div>
   )
}
export default EmpCreate;