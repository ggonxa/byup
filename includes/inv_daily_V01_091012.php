<?php
		$var = @$_GET['obj'];
		$query = $_GET['query'];
		$pname = @$_GET['pname'];
		$tricut = trim($pname);
		
		mysql_connect("localhost","zogoworx_jorge","genius"); 
		mysql_select_db("zogoworx_zinv") or die("Unable to select database"); 
		
		if ($var =="")
		  {
			$data = "select * from zinv_M_prd_inf_V001_121218 order by product_name";
		}
		else
		  {
			$query = htmlspecialchars($query); 
        	$query = mysql_real_escape_string($query);
        	$data = "SELECT * FROM zinv_M_prd_inf_V001_121218 WHERE (`product_name` LIKE '%".$query."%')";
			}
		$result=mysql_query($data);
		$num = mysql_num_rows($result);
		$fecha = $row['fecha'];
?>
    
    <div id="botones">
            	<div class="fecha">
                	<?php echo $fecha;?>
                </div>
                <div class="refre">
                    <a href="../zinv_M_prd_inf_V001_121218_V01_091012.php" target="_self"><img src="../image/r_refresh.jpg" alt=""/></a>
                </div>
                <div class="seek">
                                <form name="form" action="../zinv_M_prd_inf_V001_121218_V01_091012.php" method="get">
                                      <input size="18"type="text" name="query" align="right"/>
                                      <input type="hidden" name="obj" value='3' align="right"/>
                                </form>
                </div>
            </div>  
			 	<table align="center" class="tableWithFloatingHeader stock tablesorter">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Cost</th>

                                <th>FBA</th>
                                <th>FBA Total</th>
                                
                                <th>Zogo Inv</th>
                                <th>Zogo Total</th>
                                
                                <th>Total Inventory</th>
                                <th>Total Cost</th>
                            </tr>
                        </thead>
            <?php
					$color="1";
					$i=0;
					while ($i < $num) {
							
                            $ID=mysql_result($result,$i,"ID");
                            $var=mysql_result($result,$i,"ID");
							
                            $product_name=mysql_result($result,$i,"product_name");
							$cost = mysql_result($result,$i,"cost");
							
							$fsellable = mysql_result($result,$i,"fsellable");
							$FBA_total = ($cost * $fsellable);
							
							$zsellable = mysql_result($result,$i,"zsellable");
							$zogo_total = ($cost * $zsellable);
							
							$total_inv = ($fsellable + $zsellable);

                            $total_cost = ($cost * $total_inv);
							
							$C_total = ($C_total + $cost);
							$total_fba =($total_fba + $fsellable);
							$total_fba_c = ($total_fba_c + $FBA_total);
							$total_z = ($total_z + $zsellable);
							$total_z_c = ($total_z_c + $zogo_total);
							$total_i_c = ($total_i_c + $total_inv);
							$total_c_c = ($total_c_c + $total_cost);
                                                
            		if($color==1){
            ?>
                       		<tr bgcolor="#E2E4FF">
                                    <td bgcolor="#ddffdd"><?php echo $product_name; ?></td>
                                    
                                    <td bgcolor="#ffe641"><?php echo $cost; ?>
                                    </td>
                                    
                                    <td><?php echo $fsellable; ?></td>
                                    <td bgcolor="#FF99FF"><?php echo number_format($FBA_total,2); ?></td>
                                    
                                    <td><?php echo $zsellable; ?></td>
                                    <td bgcolor="#FF99FF"><?php echo number_format($zogo_total,2); ?></td>
                                   
                                    <td bgcolor="#E2E4FF"><?php echo $total_inv; ?></td>
                                    
                                    <td bgcolor="#ff8181"><?php echo number_format($total_cost,2); ?></td>
                                    
                             </tr>
             <?php
                            $color="2";
                            }
                      else {
             ?>
                            <tr>
                            		<td bgcolor="#eeffee"><?php echo $product_name; ?></td> 
                                    
                                    <td bgcolor="#ffff99">
                                        <?php echo $cost; ?>    
                                        </form>
                                    </td>
                                    
                                    <td bgcolor="#E3FCFF"><?php echo $fsellable; ?></td>
                                    <td bgcolor="#FFCCFF"><?php echo number_format($FBA_total,2); ?></td>
                                    
                                    <td><?php echo $zsellable; ?></td>
                                    <td bgcolor="#FFCCFF"><?php echo number_format($zogo_total,2); ?></td>
                                    
                                    <td bgcolor="#E3FCFF"><?php echo $total_inv; ?></td>
                                    
                                    <td bgcolor="#ff9999"><?php echo number_format($total_cost,2); ?></td>
                                    
                            </tr>
            <?php
                            $color="1";
                            }
                    $i++;
                    }
                    
                
                    mysql_close();
            ?>
                        <tr bgcolor="#E2E4FF">
                                        <td bgcolor="#0063DC">&nbsp;&nbsp;</td>
                                        <td bgcolor="#000066" style="color:#FFF"><?php echo number_format($C_total,2); ?></td>
                                        <td bgcolor="#660099" style="color:#FFF"><?php echo number_format($total_fba,2); ?></td>
                                        
                                        <td bgcolor="#000066" style="color:#FFF"><?php echo number_format($total_fba_c,2); ?></td>
                                        <td bgcolor="#006600" style="color:#FFF"><?php echo number_format($total_z,2); ?></td>
                                        
                                        <td bgcolor="#000066" style="color:#FFF"><?php echo number_format($total_z_c,2); ?></td>
                                        <td bgcolor="#006600" style="color:#FFF"><?php echo number_format($total_i_c,2); ?></td>
                                       
                                        <td bgcolor="#000066" style="color:#FFF"><?php echo number_format($total_c_c,2); ?></td>
                          </tr>
                </table>