<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body style="max-width: 500px; margin: 0 auto; background: #e5e5e5; padding: 30px;" >

<div style="max-width: 360px; margin: 0 auto; padding: 20px; background: #fff;">
	<h3>{{ $data['titre'] }} :</h3>
	<div>
        <?php echo $data['message']; ?>

        <?php if(isset($data['lien']) AND ($data['lien']!='')){ ?>  
        <p>
         <a href="{{ $data['lien'] }}" target="_blank"> Cliker ICI</a>
        </p>
        <?php } ?>  

        <p>-- <br/> 
          Cordiallement, <br/>
          Paydunya.
        </p>
    </div>
    <div class="text-center mt-6">
    <img class="img-pnud" src="" alt="">                
    </div>
</div>

</body>
</html>
