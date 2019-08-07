
<div class="container">
    <div class="kotak">
    <h1>Want to Connect?</h1>
    <div class="hr"></div>
        <h5>Login</h5>
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
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                <label class="form-check-label" for="exampleCheck1" >Remember me</label>
            </div>
            <button class="button" type="submit">Login</button>            
        </form>
        <span class="small-text mt-3">Don't have an account? We can fix that!
             <a href="<?=base_url('auth/registration')?>"><b>Sign up</b></a> </span>        
    </div>
</div>
