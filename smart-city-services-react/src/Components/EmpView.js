import React, {useEffect, useState,setState} from "react";
import axios from "axios";
import Post from "./Post";
import { Link } from "react-router-dom";
//nav
import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';
function EmpView()
{

    const [posts, setPosts] = useState ([]);
   
    useEffect(() => {
        
       axios.get("http://127.0.0.1:8000/api/data")
       .then(resp=>{
           console.log(resp.data);
           setPosts(resp.data);
       }).catch(err=>{
           console.log(err);
       });
   },[]);

   const onDelete = async (e,id) => {
       const check = e.currentTarget;
       check.innerText = "Deleting";
       let dl = "http://127.0.0.1:8000/api/delete/";
       let dlid = dl + id;
     

       const res = await axios.delete(dlid);
       if (res.data.status === 200) {
        check.closest('tr').remove();
           console.log(res.data.message);
           
       }
       window.location.reload();
    
  }
    return (
        
        <div>
            <div>
           

           <Navbar bg="light" expand="lg">
                 <Container>
                   <Navbar.Brand href="/Employee">Smart City Services</Navbar.Brand>
                   <Navbar.Toggle aria-controls="basic-navbar-nav" />
                   <Navbar.Collapse id="basic-navbar-nav">
                     <Nav className="me-auto">
                       <Nav.Link href="/Employee">Add Workers</Nav.Link>
                       <Nav.Link href="/empview">Cleaner</Nav.Link>
                       <Nav.Link href="/Electrician">Electrician</Nav.Link>
                       <Nav.Link href="/Plumber">Plumber</Nav.Link>
                       <NavDropdown title="More" id="basic-nav-dropdown">
                         
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
            {
                <table id="customers">
               
                <tr>
                    <th scope="col">#</th>
                    <th >Name</th>
                    <th >Phone</th>
                    <th >Address</th>
                    <th >DOB</th>
                    <th >Salary</th>
                    <th >NID</th>
                    <th >Job Location</th>
                    <th >Status</th>
                    <th >Actions</th>
   
                </tr>
                {posts.map(post => (
                    <tr key={post.cl_id}>
                        <td>{post.cl_id}</td>
                        <td>{post.cl_name}</td>
                        <td>{post.cl_phone}</td>
                        <td>{post.cl_address}</td>
                        <td>{post.cl_dob}</td>
                        <td>{post.cl_salary}</td>
                        <td>{post.cl_nid}</td>
                        <td>{post.cl_joblocation}</td>
                        <td>{post.cl_status}</td>
                        <div class="btn-group">
                            <button class="btn btn-danger btn-xs" onClick={(e)=>onDelete(e,post.cl_id)}>Delete</button>
                
                            <button class="btn btn-primary btn-xs">Update</button>
                        </div>
                    
                    </tr>
                ))}
            </table>
            }
        
    </div>
    )
}
export default EmpView;