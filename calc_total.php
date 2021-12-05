<?php
function calc_total()
{
	// If custOrder[x] = 0,1,2, or 3 perform the calculation.
	// This happens for each entry in the order.
	
	// choices[size:int(0,1,or 2),crust:int(0,1,2,or 3),noneTopping:int(0 or 1), sausage:int(0 or 1),pepperoni:int(0 or 1),chicken:int(0 or 1),JalepPepp:int(0 or 1),cheese:int(0 or 1),
	// extraCheese:int(0 or 1), sauce:int(0,1,or 2),noSide:int(0 or 1), breadsticks:int(0 or 1), lavaCake:int(0 or 1), salad:int(0 or 1), orderType:int(0 or 1)]
	
	// custOrder array:
	// 0 - size s $5, m $7, l $9
	// 1 - crust thin $0 reg $0 deep dish $2 stuffed $2
	// 2 - no topping $0
	// 3 - sausage - toppings $.50 per extra cheese - $1
	// cheese $0
	// breadstick $5
	// lava cake $7
	// salad $4
	
	$total = 0.0;
	
	$custOrder = array(); // get arr
	
	if($custOrder[0] == 0) // Size
	{
		// Size = small
		$total = $total + 5;
	}
	else if($custOrder[0] == 1) // Size
	{
		// Size = med
		$total = $total + 7;
	}
	else if($custOrder[0] == 2) // Size
	{
		// Size = large
		$total = $total + 9;
	}
	
	if($custOrder[1] == 0) // Crust
	{
		// Crust = thin
		$total = $total + 0;
	}
	else if($custOrder[1] == 1) // Crust
	{
		// Crust = reg
		$total = $total + 0;
	}
	else if($custOrder[1] == 2) // Crust
	{
		// Crust = deep dish
		$total = $total + 2;
	}
	else if($custOrder[1] == 3) // Crust
	{
		// Crust = stuffed
		$total = $total + 2;
	}
	
	if($custOrder[2] == 0) // No topping
	{
		// No topping = true
		$total = $total + 0;
	}
	else if($custOrder[2] == 1) // No topping
	{
		// No topping = false
		$total = $total + 0;
	}
	
	if($custOrder[3] == 0) // sausage
	{
		// sausage = false
		$total = $total + 0;
	}
	else if($custOrder[3] == 1) // sausage
	{
		// sausage = true
		$total = $total + 0.50;
	}
	
	if($custOrder[4] == 0) // pepporoni
	{
		// pep = f
		$total = $total + 0;
	}
	else if($custOrder[4] == 1) // pepporoni
	{
		// pep = t
		$total = $total + 0.50;
	}
	
	if($custOrder[5] == 0) // Chicken
	{
		// chicken = false
		$total = $total + 0;
	}
	else if($custOrder[5] == 1) // Chicken
	{
		// chicken = true
		$total = $total + 0.50;
	}
	
	if($custOrder[6] == 0) // JP
	{
		// JP = f
		$total = $total + 0;
	}
	else if($custOrder[6] == 1) // JP
	{
		// JP = t
		$total = $total + 0.50;
	}
	
	if($custOrder[7] == 0) // cheese
	{
		// cheese = f
		$total = $total + 0;
	}
	else if($custOrder[7] == 1) // Cheese
	{
		// cheese = t
		$total = $total + 0;
	}
	
	if($custOrder[8] == 0) // Extra cheese
	{
		// EC = f
		$total = $total + 0;
	}
	else if($custOrder[8] == 1) // Extra cheese
	{
		// EC = t
		$total = $total + 1.00;
	}
	
	if($custOrder[9] == 0) // Sauce
	{
		// s = f
		$total = $total + 0;
	}
	else if($custOrder[9] == 1) // Sauce
	{
		// s = ranch
		$total = $total + 0.50;
	}
	else if($custOrder[9] == 2) // Sauce
	{
		// s = marinara
		$total = $total + 0.50;
	}
	
	if($custOrder[10] == 0) // No Sides
	{
		// No sides = f
		$total = $total + 0;
	}
	else if($custOrder[10] == 1) // No Sides
	{
		// No Sides = true
		$total = $total + 0;
	}
	
	if($custOrder[11] = 0) // Breadsticks 
	{
		// b = f
		$total = $total + 0;
	}
	else if($custOrder[11] == 1) // Breadsticks
	{
		// b = t
		$total = $total + 5.00;
	}
	
	if($custOrder[12] == 0) // Lava cake
	{
		// LC = f
		$total = $total + 0;
	}
	else if($custOrder[12] == 1) // Lava cake
	{
		// LC = t
		$total = $total + 7.00;
	}
	
	if($custOrder[13] == 0) // Salad
	{
		// salad = f
		$total = $total + 0;
	}
	else if($custOrder[13] == 1) // Salad
	{
		// salad = t
		$total = $total + 4.00;
	}
	
	if($custOrder[14] == 0) // Order delivery method
	{
		// ODM = carry out
		$total = $total + 0;
	}
	else if($custOrder[14] == 1) // Order delivery method
	{
		// ODM = delivery
		$total = $total + 3.00;
	}
	
	return $total;
}

// Call it
calc_total();
?>