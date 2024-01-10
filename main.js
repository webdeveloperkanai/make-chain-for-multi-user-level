function drawLine(id1, id2) {
    const box1 = document.getElementById(id1);
    const box2 = document.getElementById(id2);

    if (!box1 || !box2) {
        console.error("Invalid box IDs");
        return;
    }

    const box1Rect = box1.getBoundingClientRect();
    const box2Rect = box2.getBoundingClientRect();

    const x1 = box1Rect.left + box1Rect.width / 2;
    const y1 = box1Rect.top + box1Rect.height / 2;
    const x2 = box2Rect.left;
    const y2 = box2Rect.top + box2Rect.height / 2;

    const length = Math.sqrt((x2 - x1) ** 2 + (y2 - y1) ** 2);
    const angle = Math.atan2(y2 - y1, x2 - x1);

    const line = document.createElement('div');
    line.className = 'line';
    line.style.width = length + 'px';
    line.style.transform = `translate(${x1}px, ${y1}px) rotate(${angle}rad)`;

    document.body.appendChild(line);
}


function getDistance(id1, id2) {
    const box1 = document.getElementById(id1);
    const box2 = document.getElementById(id2);

    if (!box1 || !box2) {
        console.error("Invalid box IDs");
        return;
    }

    const box1Rect = box1.getBoundingClientRect();
    const box2Rect = box2.getBoundingClientRect();

    const dx = box2Rect.left - box1Rect.left;
    const dy = box2Rect.top - box1Rect.top;

    return Math.sqrt(dx ** 2 + dy ** 2);
}