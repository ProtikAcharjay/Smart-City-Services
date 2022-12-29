import {BrowserRouter, Routes, Route } from "react-router-dom";
import EmpCreate from "./EmpCreate";
import App from "../App";
import EmpNav from "./EmpNav";
import EmpView from "./EmpView";
import Employee from "./Employee";
function EmpHome() {
    

    return (
        <>
            <BrowserRouter>
            <EmpNav />
        <Routes>
            <Route path='/empview' element={<EmpView />}/>   
            <Route path='/Employee' element={<Employee />}/>   
        </Routes>
        
            </BrowserRouter>
      
        </>
        
    )
}
export default EmpHome;