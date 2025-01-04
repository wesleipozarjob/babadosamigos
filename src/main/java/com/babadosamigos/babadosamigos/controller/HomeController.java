package com.babadosamigos.babadosamigos.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;

@Controller
public class HomeController {

    // Mapeia a URL raiz ("/") para a página inicial
    @GetMapping("/")
    public String home() {
        return "index";
        // Retorna a página index.html
    }
}





