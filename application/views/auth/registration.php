
<div class="container">
    <div class="kotak">
    <h1>Want to Connect?</h1>
    <div class="hr"></div>
        <h5>Registration</h5>
        <?=$this->session->flashdata('message')?>
        <form class="mt-3" method="post" action="">
            <div class="form-group">                
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                <span class="small text-light"><?=form_error('username')?></span>  
            </div>
            <div class="form-group">                
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <span class="small text-light"><?=form_error('password')?></span>  
            </div>
            <div class="form-group">                
                <input type="password" class="form-control" id="password2" placeholder="Repeat Password" name="password2">                
            </div>
            <button class="button" type="submit">Sign Up</button>            
        </form>        
    </div>
</div>
