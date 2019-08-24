export function hello(text) {
  const div = document.createElement('div');
  div.textContent = `Hello ${text}`;
  document.body.appendChild(div);
}

export function do_something(array){
	var canvas = document.createElement('canvas');
	var ctx = canvas.getContext('2d');
	ctx.fillStyle = "rgb(255, 0, 0)";
	let initx = 40;
	let width = 30; // 30 px wide
	let spacing = 10;
	for(var i = 0; i < x.length; i++){
		var height = (x[i] * 10) + 1; // simulating a graph ,scale by 10;
		ctx.fillRect(initx, 10, width, height);
		initx += width + spacing;
	}
}