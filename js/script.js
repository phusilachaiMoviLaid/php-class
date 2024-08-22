function calculateCalories() {
    const weight = parseFloat(document.getElementById('weight').value);
    const height = parseFloat(document.getElementById('height').value);
    const age = parseInt(document.getElementById('age').value);
    const gender = document.getElementById('gender').value;

    if (!weight || !height || !age || !gender) {
        alert('กรุณากรอกข้อมูลให้ครบถ้วน');
        return;
    }

    let bmr;

    if (gender === 'male') {
        bmr = 10 * weight + 6.25 * height - 5 * age + 5;
    } else {
        bmr = 10 * weight + 6.25 * height - 5 * age - 161;
    }

    document.getElementById('result').textContent = `แคลอรี่ที่ต้องการต่อวัน: ${bmr.toFixed(2)} แคลอรี่`;
}
