<header class="masthead" style="background-image: url('img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
          	<div class="col-lg-8 col-md-10 mx-auto">
            	<div class="site-heading">
              		<h1>Clean Blog</h1>
              		<span class="subheading">A Blog Theme by Start Bootstrap</span>
            	</div>
          	</div>
        </div>
    </div>
</header>
<div class="container">
	<div class="card text-white bg-secondary my-4 text-center">
        <div class="card-body">
          <p class="text-white m-0">Create new information</p>
        </div>
    </div>
	<div class="form-group{{ $errors->has('img') ? ' is-invalid' : '' }}">        
                <div class="custom-file">
                    <input type="file" id="img" name="img" class="{{ $errors->has('img') ? ' is-invalid ' : '' }}custom-file-input" required>
                    <label class="custom-file-label" for="image"></label>
                    @if ($errors->has('img'))
                        <div class="invalid-feedback">
                            {{ $errors->first('img') }}
                        </div>
                    @endif
                </div>
            </div>
	<div class="form-group {{$errors->has('Title')?'has-error':''}}">
		<label for="title" class="control-label sr-only">Titre</label>
		<input type="text" id="title" 
				name="Title" placeholder="Entrez le titre"
				class="form-control">
		{!!$errors->first('Title', 
		'<span class="help-block">:message</span>')!!}
	</div>

	<div class="form-group {{$errors->has('Description')?'has-error':''}}">
		<label for="description" class="control-label sr-only">Description</label>
		<textarea name="Description" id="description" 
			cols="30" rows="10"  
			placeholder="Entrez la description" class="form-control">
		</textarea>
		{!!$errors->first('Description', 
		'<span class="help-block">:message</span>')!!}
	</div>

	<div class="form-group {{$errors->has('Url')?'has-error':''}}">
		<label for="url" class="control-label sr-only">Titre</label>
		<input type="text" id="url" 
				name="Url" placeholder="Entrez l'url"
				class="form-control">
		{!!$errors->first('Url', 
		'<span class="help-block">:message</span>')!!}
	</div>

	<div class="form-group">
		<input class="btn btn-primary btn-block" type="submit" value="Ajouter">
	</div>
</div>