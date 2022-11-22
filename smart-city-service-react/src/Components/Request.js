import '../Com.css';

function Request() {
  return (
    <div className="req">
      <h1>Request Services</h1>
      <label>Request Service for</label>
        <br/>
        <input type="radio" id="elreq" name="reqtype" value="Electrician"/>
        <label for="el">Electrician</label>
        <input type="radio" id="clreq" name="reqtype" value="Cleaner"/>
        <label for="cl">Cleaner</label>
        <input type="radio" id="plreq" name="reqtype" value="Plumber"/>
        <label for="pl">Plumber</label>
        <br />
        <label>Request Service Date & Time</label>
        <br/>
        <input type="datetime-local" class="form-control" name="reqdate" placeholder="Enter required service date"></input>
<br />
<label>Address</label>
<br/>
                <input type="text" class="form-control" name="reqaddress" placeholder="Enter your address"></input>
   <br />
   <button type="submit" className="btn btn-block btn-primary"> Request</button>
    </div>
  );
}

export default Request;
