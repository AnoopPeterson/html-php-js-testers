export function hello(text) {
  const div = document.createElement('div');
  div.textContent = `Hello ${text}`;
  document.body.appendChild(div);
}

export function do_something(array){
	var canvas = document.createElement('canvas');
	canvas.id = 'wee';
	canvas.width = '500';
	canvas.height = '500';
	document.body.appendChild(canvas);

	var ctx = document.getElementById('wee').getContext('2d');
	ctx.fillStyle = "rgb(255, 0, 0)";
	let initx = 40;
	let width = 30; // 30 px wide
	let spacing = 10;
	for(var i = 0; i <array.length; i++){
		var height = (array[i] * 10) + 1; // simulating a graph ,scale by 10;
		ctx.fillRect(initx, 10, width, height);
		initx += width + spacing;
	}
}

export function array_test(array) {
	const span = document.createElement('span');
	span.textContent = `${array}`;
	document.body.appendChild(span);
}