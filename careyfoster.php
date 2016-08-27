<?php include("./templates/header.php"); ?>

     
	   <div class="container" >
        <div class="row">
          <div class="col-s12 z-depth-4">
            <div class="card-panel purple accent-1"><h5>Determination Of Resistance Per Unit Length Of Bridge Wire</h5></div>
          </div>
        </div>
    	 <div class="row" id="table2">
      	<div class="col-s10 offset-s1" >
            <table class="striped z-depth-3 purple lighten-4" style="">
              <thead>
                <tr>
                    <th rowspan="2">S.No</th>
                    <th rowspan="2">Resistance</th>
                    <th colspan="2">Balancing Length When Resistance(X) is</th>
                    <th rowspan="2">l<sub>2</sub>-l<sub>1</sub> (cm)</th>
                    <th rowspan="2">T=X/(l<sub>2</sub>-l<sub>1</sub>)</th>
                </tr>
                <tr>
                		<th>Left Gap (l<sub>1</sub>)</th>
                		<th>Right Gap (l<sub>2</sub>)</th>
                </tr>
              </thead>
  
        		  <form  method="POST" id="form1">
                <tbody>
                		<?php 
              				for($i=0;$i<6;$i++)
              				{
              					include("./templates/cf.php");
              				}
          			     ?>	
        			   <input type="hidden" name="exp" value="cf">	
            		 <tr>
            				<td colspan="6"><button type="submit" class="waves-effect waves-light btn" name="submit_cf" >Calculate</button></td>
            		 </tr>
                </tbody>
              </form>
            </table>
        </div>
        <div class="offset-s1"></div>
    	</div>  
	</div>

  <!--table 1 ends-->   
  <div class="container hidden center" id="mean-container">
      <div class="row">
        <div class="col-s12 z-depth-3 purple lighten-4">
          <div class="card-panel purple accent-1"> Mean T is<span id="mean"></span></div>
        </div>
      </div>
  </div> 

  <!--Table 2 begins-->
<div class="container hidden" id="con_2">
  <div class="row">
    <div class="col-s12 z-depth-4">
      <div class="card-panel purple accent-1 center"><h5>Determination Of (x-y) , The Difference Of Resistance Unknown Resistance, and Determination of Y (the unknown resistance) , If resistance X is known</h5></div>
    </div>
  </div>
  <div class="row">
        <div class="col-s10 offset-s1">
            <table class="striped z-depth-3 purple lighten-4" style="">
              <thead>
                <tr>
                    <th rowspan="2">S.No</th>
                    <th rowspan="2">Resistance</th>
                    <th colspan="2">Balancing Length When Resistance(X) is</th>
                    <th rowspan="2">l<sub>2</sub>-l<sub>1</sub> (cm)</th>
                    <th rowspan="2">X-Y=T(l<sub>2</sub>-l<sub>1</sub>)</th>
                    <th rowspan="2">Y=X-T(l<sub>2</sub>-l<sub>1</sub>)</th>
                </tr>
                <tr>
                    <th>Left Gap (l<sub>1</sub>)</th>
                    <th>Right Gap (l<sub>2</sub>)</th>
                </tr>
              </thead>
              <form id="form2">
              <tbody>
                <?php 
                      for($i=0;$i<6;$i++)
                      {
                        include("./templates/cf1.php");
                      }
                ?> 
                <input type="hidden" name="mean" id="mean1"> 
                <input type="hidden" name="exp" value="cf1">
                 <tr>
                    <td colspan="7"><button type="submit" class="waves-effect waves-light btn">Calculate</button></td>

                 </tr>
              </tbody>
             </form> 
            </table>
        </div>
  </div>
</div>  
<div class="container hidden center" id="mean-container2">
      <div class="row">
        <div class="col-s12 z-depth-3 purple lighten-4">
          <div class="card-panel purple accent-1"> Mean Y is<span id="meann"></span></div>
        </div>
      </div>
  </div> 

<!--Table 2 ends -->
  <div class="container hidden" id="con_3">
    <div class="row">
      <div class="col s12">
        <div class="row purple lighten-4">
        <form id="form3">
          <div class="input-field col s4">
            <input  id="radius" type="text" name="rad">
            <label for="first_name">Radius Of Wire</label>
          </div>
          <div class="input-field col s4">
            <input id="length" type="text" name="len" >
            <label for="length">Length Of Wire</label>
          </div>
          <div class="input-field col s4">
                <input type="hidden" name="mean"  id="mean2"> 
                <input type="hidden" name="exp" value="xyz">
            <button type="submit" class="waves-effect waves-light btn modal-trigger">Calculate</button>
           </div> 
          </form>
        </div>
      </div>
    </div>
  </div>

  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Calculations Finished</h4>
      <p>Specific Resistance of wire is <span id="final"></span></p>
    </div>

              



      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="materialize/js/jquery.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script type="text/javascript" src="materialize/js/carey.js"></script>
    </body>
  </html>
        