<?php require_once 'header.php'; ?>
<div class="row">
    <div class="large-12 column">
        <div class="alert-box info"><strong>:required</strong> is a state based pseudo class that can be useful when
            styling forms.
        </div>
        <p class="text-justify">
            we have lots of control providing over visual interface without writing lots of javascript.<br><br>
            HTML 5 validation and state based pseudo class.<br><br>
        </p>
    </div>
    <div class="large-6 column collapse">
        <form class="html5-form-validation" method="post">
            <fieldset>
                <legend>Form</legend>
                <div class="small-12 column">
                    <input class="right" type="text" name="name" id="name" required>
                    <label class="left" for="name"> Name: </label>
                </div>

                <div class="small-12 column">
                    <input class="right" type="email" name="email" id="email" required>
                    <label class="left" for="email"> Email </label>
                </div>

                <div class="small-12 column">
                    <input class="right" type="tel" name="mobile" id="mobile" pattern="[0-9]+">
                    <label class="left" for="mobile"> Contact no: </label>
                </div>
                <div class="small-12 column">
                    <input class="right" type="text" name="feadback" id="feadback" required>
                    <label class="left" for="feadback"> Feadback : </label>
                </div>


                <div class="large-12 column"><input type="submit" value="submit" class="button radius tiny"></div>
            </fieldset>
        </form>
    </div>
    <div class="large-6 column">
        <fieldset class="lblca">
            <legend>SCSS Code</legend>
    <pre>
    <code>
.html5-form-validation {
  *:required ~ label:after {
    content: "*";
    color: $alert-color;
  }
  *:optional ~ label:after {
    content: "(optional)";
    color: darken($secondary-color, 20);
  }
  &amp; label {
    width: 40%;
    max-height: 2.3125rem;
  }
  &amp; input {
    width: 60%;
    &amp;[type="submit"] {
      width: auto;
    }
    &amp;:not([type="submit"]):valid:focus {
      box-shadow: 0 0 10px rgba(101, 169, 10, 0.8);
      outline: 0
    }
    &amp;:not([type="submit"]):invalid:focus {
      border-color: red;
      box-shadow: 0 0 10px red;
      outline: 0;
    }
    &amp;[ type = "text"]:invalid:focus ~ label:before {
      content: "Please fill your "
    }
    &amp;[ type = "email"]:invalid:focus ~ label:before {
      content: "Please enter a valid "
    }
    &amp;[ type = "tel"]:invalid:focus ~ label:before {
      content: "Please only use "
    }
  }

}
    </code>
    </pre>
        </fieldset>
    </div>
</div>
<?php require_once 'footer.php'; ?>
