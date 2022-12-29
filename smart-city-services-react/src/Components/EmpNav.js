import React from "react";
import { Link } from "react-router-dom";
function EmpNav() {

    return (
        <nav>
            <Link  to='/'>Home</Link>
            <Link to='/Employee'>Add </Link>
        </nav>
    )
}
export default EmpNav;