
<center>
    <form action="add.php" method="POST">
        <table>
            <tr>
                <td>
    Name <span style="color:red">*</span>
                </td>
                <td>
    <input type="text" name="pname" id="" required>
                </td>
        </tr>
        <tr>
                <td>
   Father Name <span style="color:red">*</span>
                </td>
                <td>
    <input type="text" name="fname" id="" required>
                </td>
        </tr>

        <tr>
                <td>
  Mother Name <span style="color:red">*</span>
                </td>
                <td>
    <input type="text" name="mname" id="" required>
                </td>
        </tr>

            <tr>
                <td>
Adhaar <span style="color:red">*</span>
                </td>
                <td>
                <input type="text" name="paadhar" id="" pattern="[0-9]{12}" title="Give valid Aadhar No 8888-8888-8888" required>
                </td>
            </tr>
            <tr>
                <td>
DOB <span style="color:red">*</span>
                </td>
                <td>
<input type="date" name="pdob" id="" required>
                </td>
            </tr><tr>
                <td>
Gender <span style="color:red">*</span>
                </td>
                <td>
                Male <input type="radio" name="pgender" id="" value="male" checked> Female<input type="radio" name="pgender" id="" value="female">
                </td>
            </tr>
<!--             
            <tr>
                <td>
Symptoms  <span style="color:red">*</span>
                </td>
                <td>
                <input type="checkbox" id="cough" name="sym[]" value="cough" > Cough      
                <input type="checkbox" id="cold" name="sym[]" value="cold"> Cold 
                <input type="checkbox" id="headache" name="sym[]" value="headache"> Headache 
                <input type="checkbox" id="abdominalpain" name="sym[]" value="abdominalpain"> Abdominal pain 
                <input type="checkbox" id="fever" name="sym[]" value="fever"> Fever  <br>
                <input type="checkbox" id="gastric" name="sym[]" value="gastric"> Gastric
                <input type="checkbox" id="vomiting" name="sym[]" value="vomiting"> Vomiting  
                <input type="checkbox" id="bodypain" name="sym[]" value="bodypain"> Body pain
                <input type="checkbox" id="runnynose" name="sym[]" value="runnynose"> Runny nose
                <input type="checkbox" id="soarthroat" name="sym[]" value="soarthroat"> Soar throat <br><br>
                Other Symptoms    <textarea  name="symarea"> </textarea> 


                </td>
            </tr> -->
            
            <!-- <tr>
                <td>
                Medicines <span style="color:red">*</span>
                </td>
                <td>
       <textarea  name="medicine" required> </textarea> 
            
    </td>
            </tr><tr>
                <td>
        Disease  <span style="color:red">*</span>
                </td>
                <td>
                <textarea  name="dieseas" required> </textarea> 
                </td>
            </tr> -->



            
            <tr>
                <td>
               gmail<span style="color:red">*</span>
                </td>
                <td>
             <input  type="gmail" name="pmail" >
                </td>
            </tr>
            <tr>
                <td>
             Phone <span style="color:red">*</span>
                </td>
                <td>
             <input type="number" name="pmbl" pattern="[0-9]{10}">
                </td>
            </tr>

           
    
            <tr>
                <td>
                Blood Group 
                </td>
                <td>
             <input  type="text" name="pblood" value=''>
                </td>
            </tr>
            <tr>
                <td>
                Height
                </td>
                <td>
             <input  type="number" name="pht" value=''>
                </td>
            </tr>
            <tr>
                <td>
                Weight
                </td>
                <td>
             <input  type="number" name="pwt" value=''>
                </td>
            </tr>

            <tr>
                <td>
                Address 
                </td>
                <td>
             <textarea name="padd" id="" cols="3" rows="1" required></textarea> 
                </td>
            </tr>


        <tr>

      <td  style="text-align: center;"> <input  type="submit" value="Submit"></td><td>    <button onclick="javascript:window.history.back(-1);return false;">Back</button></td> 
        </tr>
  
  
        </table>


    </form>

    </center>