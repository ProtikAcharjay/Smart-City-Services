import React, {Components} from "react";
import { Link } from "react-router-dom";
import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';

const Head = () => {
    return(
        <div>
            {/* <Link to="">Home</Link> */}
            {/* <Link to="/profile">Profile</Link>
            <Link to="/contact">Contact</Link>
            <Link to="/color">Color State</Link>
            <Link to="/effect">Effect State</Link>
            <Link to="/allposts">All Posts</Link>
            <Link to="/apiproducts">All Products</Link>
            <Link to="/login">Login</Link>
            <Link to="/logout">Log out</Link> */}

<Navbar bg="light" expand="lg">
      <Container>
        <Navbar.Brand href="/login">Smart City Services</Navbar.Brand>
        <Navbar.Toggle aria-controls="basic-navbar-nav" />
        <Navbar.Collapse id="basic-navbar-nav">
          <Nav className="me-auto">
            <Nav.Link href="/home">Home</Nav.Link>
            <Nav.Link href="/customerdetails">Customer Details</Nav.Link>
            <NavDropdown title="More" id="basic-nav-dropdown">
              <NavDropdown.Item href="/empview">Employee</NavDropdown.Item>
              <NavDropdown.Item href="/employeedetails">
                Employee Details
              </NavDropdown.Item>
              <NavDropdown.Item href="/userreq">
                User Request
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
    )
}
export default Head;