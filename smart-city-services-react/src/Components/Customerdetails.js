
import React, {useEffect, useState } from "react";
import axios from 'axios';
import Table from 'react-bootstrap/Table';
//nav
import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';


const Customerdetails = () => {

    const[customers, setCustomers]=useState([]);
    
    useEffect(()=>{
        axios.get("http://127.0.0.1:8000/api/customer/list")
        .then(resp=>{
            console.log(resp.data);
            setCustomers(resp.data);
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
            <h3>Customer Details</h3>
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
                {customers.map(customer=>(
                    <tr key={customer.c_id}>
                        <td>{customer.c_id}</td>
                        <td>{customer.c_name}</td>
                        <td>{customer.c_email}</td>
                        <td>{customer.c_phone}</td>
                        <td>{customer.c_dob}</td>
                        <td>{customer.c_address}</td>
                    </tr>
                    
                ))}
                </tbody>
            </Table>

            </div>
         
         
        </div>
    )
}
export default Customerdetails;