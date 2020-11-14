package org.Adrian.Guerrero.proyecto.web.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class HomeController {
	@GetMapping("/")
public String monstrarIndex() {
	return "home";
}
	@GetMapping("/acerca")
	public String acerca() {
		return "acerca";
	}
	@GetMapping("/servicios")
	public String servicios() {
		return "servicios";
	}
	@GetMapping("/registro")
	public String registro() {
		return "registro";
	}
	@GetMapping("/formLogin")
	public String formLogin() {
		return "formLogin";
	}
}
