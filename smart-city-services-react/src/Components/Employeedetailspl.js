
import React, {useEffect, useState } from "react";
import axios from 'axios';
import Table from 'react-bootstrap/Table';
import { Link } from "react-router-dom";
//nav
import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';


const Employeedetailspl = () => {

    const[employees, setEmployees]=useState([]);
    
    useEffect(()=>{
        axios.get("http://127.0.0.1:8000/api/employee/list/pl")
        .then(resp=>{
            console.log(resp.data);
            setEmployees(resp.data);
        }).catch(err=>{
            console.log(err);
        });
    },[]);

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
            <div className="customerstable">
                {/* {customers.map((customer)=>{
                    return(<li>{customer.c_name}</li>)
                })} */}
            <h3>Plumber Employee Details</h3>
            <div className="linkseparator">
            <Link className="linkclass" to="/employeedetails">Electrician Employee</Link>
            <Link className="linkclass" to="/employeedetails/pl">Plumber Employee</Link>
            <Link className="linkclass" to="/employeedetails/cl">Cleaner Employee</Link>
                </div>
            <Table striped bordered hover size="sm">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>DOB</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                {employees.map(pl_emp=>(
                    <tr key={pl_emp.pl_emp_id}>
                        <td>{pl_emp.pl_emp_id}</td>
                        <td>{pl_emp.pl_emp_name}</td>
                        <td>{pl_emp.pl_emp_email}</td>
                        <td>{pl_emp.pl_emp_phone}</td>
                        <td>{pl_emp.pl_emp_dob}</td>
                        <td>{pl_emp.pl_emp_address}</td>
                    </tr>
                    
                ))}
                </tbody>
            </Table>

            </div>
         
         
        </div>
    )
}
export default Employeedetailspl;