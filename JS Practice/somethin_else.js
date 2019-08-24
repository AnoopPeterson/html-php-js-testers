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
}

export function array_test(array) {
	const span = document.createElement('span');
	span.textContent = `${array}`;
	document.body.appendChild(span);
}