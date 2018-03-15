<section id="idxqs-2" class="widget idxqs">
  <h2 class="widget-title">Quick search</h2>

  <form class="homesearch" name="myform" action="http://yancey.localhomesearch.net/idx/" target="_new">
  <script language="javascript" src="http://img.localhomesearch.net/ijs/cmls_subd_qs_v3.js"></script>

  <input type="hidden" name="op" value="query">
  <input type="hidden" name="stype" value="area">
  <input type="hidden" name="_srf" value="1">

<div class="block">
  <span class="searchlabel">Property Type:</span>
  <select name="proptype">
  <option value="res">Single-family Homes</option>
  <option value="cnd">Condos/Townhomes</option>
  <option value="mul">Multifamily</option>
  <option value="lnd">Land</option>
  </select>
</div>

<div class="block">
  <span class="searchlabel">Area:</span>
  <select name="area" onChange="subBox(document.myform.area.value);" >
  <option value="">Choose an area</option>
  <option value="1" >N Mecklenburg</option>
  <option value="2" >NE Mecklenburg</option>
  <option value="3" >E Mecklenburg</option>
  <option value="4" >SE Mecklenburg</option>
  <option value="sc" >S Mecklenburg</option>
  <option value="7" >SW Mecklenburg</option>
  <option value="8" >W Mecklenburg</option>
  <option value="9" >NW Mecklenburg</option>
  <option value="99" >Uptown Charlotte</option>
  <option value="13" >Lake Norman</option>
  <option value="15" >Lake Wylie</option>
  <option value="42" >Mtn. Island Lake</option>
  <option value="10" >Union County</option>
  <option value="11" >Cabarrus County</option>
  <option value="12" >Iredell County</option>
  <option value="14" >Lincoln County</option>
  <option value="16" >Gaston County</option>
  <option value="17" >York County</option>
  <option value="24" >Lancaster County</option>
  <option value="35" >Chester County</option>
  <option value="" >-----</option>
  <option value="20" >Alexander County</option>
  <option value="44" >Alleghany County</option>
  <option value="25" >Anson County</option>
  <option value="40" >Ashe County</option>
  <option value="38" >Avery County</option>
  <option value="27" >Burke County</option>
  <option value="26" >Caldwell County</option>
  <option value="29" >Catawba County</option>
  <option value="36" >Chesterfield County</option>
  <option value="22" >Cleveland County</option>
  <option value="28" >Davidson County</option>
  <option value="31" >Davie County</option>
  <option value="51" >Forsyth County</option>
  <option value="50" >McDowell County</option>
  <option value="49" >Mitchell County</option>
  <option value="30" >Montgomery County</option>
  <option value="33" >Moore County</option>
  <option value="47" >Polk County</option>
  <option value="34" >Randolph County</option>
  <option value="32" >Richmond County</option>
  <option value="46" >Rockingham County</option>
  <option value="21" >Rowan County</option>
  <option value="45" >Rutherford County</option>
  <option value="23" >Stanly County</option>
  <option value="41" >Surry County</option>
  <option value="43" >Watauga County</option>
  <option value="39" >Wilkes County</option>
  <option value="37" >Yadkin County</option>
  <option value="48" >Yancey County</option>
  </select>
</div>

<!-- 
Subdivision/Complex:<br/>
<select name="subdivision">
</select>
 -->

<div class="block">
  <span class="searchlabel">Beds:</span>
  <select name="beds">
  <option value="">any</option>
  <option value="1">1+</option>
  <option value="2">2+</option>
  <option value="3">3+</option>
  <option value="4">4+</option>
  <option value="5">5+</option>
  </select>
</div>

<div class="block">
  <span class="searchlabel">Baths:</span>
  <select name="baths">
  <option value="">any</option>
  <option value="1">1+</option>
  <option value="2">2+</option>
  <option value="3">3+</option>
  <option value="4">4+</option>
  </select>
</div>

<div class="block">
  <span class="searchlabel">Min. Price:</span>
  <select name="price_min">
  <option value="">none</option>
  <option value="100000">$100,000
  <option value="150000">$150,000
  <option value="200000">$200,000
  <option value="250000">$250,000
  <option value="300000">$300,000
  <option value="350000">$350,000
  <option value="400000">$400,000
  <option value="450000">$450,000
  <option value="500000">$500,000
  <option value="600000">$600,000
  <option value="700000">$700,000
  <option value="800000">$800,000
  <option value="900000">$900,000
  <option value="1000000">$1,000,000
  </select>
</div>

<div class="block">
<span class="searchlabel">Max Price:</span>
<select name="price_max">
  <option value="">none</option>
  <option value="100000">$100,000
  <option value="150000">$150,000
  <option value="200000">$200,000
  <option value="250000">$250,000
  <option value="300000">$300,000
  <option value="350000">$350,000
  <option value="400000">$400,000
  <option value="450000">$450,000
  <option value="500000">$500,000
  <option value="600000">$600,000
  <option value="700000">$700,000
  <option value="800000">$800,000
  <option value="900000">$900,000
  <option value="1000000">$1,000,000
  </select>
  </div>

<!-- Features:
<input type="checkbox" name="has_basement" value="1"> Basement<br/>
<input type="checkbox" name="has_fireplace" value="1"> Fireplace<br/>
<input type="checkbox" name="has_garage" value="1"> Garage<br/>
<input type="checkbox" name="has_golf" value="1"> Golf<br/>
<input type="checkbox" name="has_master_down" value="1"> Master Downstairs<br/>
<input type="checkbox" name="new_construction" value="1"> New Construction<br/>
<input type="checkbox" name="has_pool" value="1"> Pool<br/>
<input type="checkbox" name="is_waterfront" value="1"> Waterfront Property<br/>
<input type="checkbox" name="is_waterview" value="1"> Water view<br/> -->
<div class="block">
  <input class="home-btn-search" type="submit" value="Search">
</div>
</form>

</section>