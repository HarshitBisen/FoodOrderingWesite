<div class="col-sm-4"><h1>Food Adda</h1></div>
	<div class="col-sm-8">
		<script type="text/javascript">
			$('document').ready(function(){
				$('#d').click(function(){
					$('#d2').hide();
					$('#d1').slideToggle();
				});

				$('#o').click(function(){
					$('#d1').hide();
					$('#d2').slideToggle();
				});
			});
		</script>
		<ul>
			<li><b><?= anchor('home/open_home',"Home") ?></b></li>
			<li id="d"><b>Delicacies</b>
			<div id="d1">
				<p>Delicacy Insert</p>
				<p>Delicacy Display</p>	
			</div>
			</li>
			<li id="o"><b>Orders</b>
			<div id="d2">
				<p>Offline Order</p>
				<p>Offline order display</p>
				<p>Online Order display</p>	
			</div>
			</li>
			<li><a href="#"><b>Login</b></a></li>
		</ul>
	</div>