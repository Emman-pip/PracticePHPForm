const signUpTypeChecking = () => {
  const passRetypeCheck = () => {
    const passRetyped = document.querySelector(".signInPrompt");
    passRetyped.addEventListener("keyup", (e) => {
      const btn = document.getElementById("signUpBtn");
      const pass1 = document.querySelector("#pwd");
      const pass2 = document.querySelector("#pwd2");
      const pwds = [pass1, pass2];
      if (
        pass1.value !== pass2.value ||
        pass1.value.length < 8 ||
        pass2.value.length < 8
      ) {
        console.log("unmatching");
        pwds.forEach((pass) => {
          pass.style.outline = "1px solid red";
        });
        btn.disabled = true;
      } else {
        pwds.forEach((pass) => {
          pass.style.outline = "none";
        });
        btn.disabled = false;
      }
    });
  };
  return { passRetypeCheck };
};

console.log("working");
signUpTypeChecking().passRetypeCheck();
