
<?php
	function recipe($recipeName, $recipeImg, $recId){
		$recipes = '
			<div class="menu">
      			<button type="submit" class="recipeBtn" formmethod="post" name="viewRecipe"><a href ="./recipe_ingredients.php"class="recInfoLink" ><div class="recipe">
        			<img src="'.$recipeImg.'" alt="recipe1">
              
       				<div id="content">
         				<h3>'.$recipeName.' id '.$recId.'</h3>
          				<p>This is were the recipe description will go and it goes something like..... just joking i have no instructions in mind but how to make tea</p>
        			</div>
      			</div></a></button>
            <input type="hidden" name="recipeId" value="'.$recId.'">
    		</div>

		';

		echo $recipes;
	}

  function recipeInfo($recipeName, $recipeImg, $recId){
   echo( '<img src="'.$recipeImg.'" alt="recipe1">
      <h3 id="name">'.$recipeName.'</h3>
      <h4>instructions</h4>
      <p id="desciption">This is were the recipe description will go and it
        goes something like..... just joking i have no instructions
        in mind but how to make tea</p>');
  }

	