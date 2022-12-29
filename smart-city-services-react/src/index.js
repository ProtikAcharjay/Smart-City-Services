import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import reportWebVitals from './reportWebVitals';
import Home from './Components/Home';
import Head from './Components/Head';
import Foot from './Components/Foot';
import Login from './Components/Login';
import {BrowserRouter as Router, Route, Routes} from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css';
import Landing from './Components/Landing';
import Customerdetails from './Components/Customerdetails';
import Employeedetails from './Components/Employeedetails';
import Employeedetailspl from './Components/Employeedetailspl';
import Employeedetailscl from './Components/Employeedetailscl';
import Userreq from './Components/Userreq';
import Registration from './Components/Registration';
import EmpHome from './Components/EmpHome';
import EmpView from './Components/EmpView';
import Employee from './Components/Employee';
import Plumber from './Components/Plumber';
import Electrician from './Components/Electrician';






const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
    <Router>
      {/* <Head/> */}
      <Routes>

      <Route exact path='/' element={<Landing />} />
      <Route exact path='/login' element={<Login />} />
      <Route exact path='/home' element={<Home />} />
      <Route exact path='/customerdetails' element={<Customerdetails />} />
      <Route exact path='/employeedetails' element={<Employeedetails />} />
      <Route exact path='/employeedetails/pl' element={<Employeedetailspl />} />
      <Route exact path='/employeedetails/cl' element={<Employeedetailscl />} />
      <Route exact path='/userreq' element={<Userreq />} />
      <Route exact path='/registration' element={<Registration />} />
      {/* <Route exact path='/emphome' element={<EmpHome />} /> */}
      <Route path='/Employee' element={<Employee />}/> 
      <Route path='/empview' element={<EmpView />}/>   
      
      <Route path='/Plumber' element={<Plumber />}/> 
      <Route path='/Electrician' element={<Electrician />}/> 
      
      
      </Routes>
      <Foot/>
    </Router>

  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();