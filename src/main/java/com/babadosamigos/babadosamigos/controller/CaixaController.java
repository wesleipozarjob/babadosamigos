package com.babadosamigos.babadosamigos.controller;

import com.babadosamigos.babadosamigos.model.Gastos;
import com.babadosamigos.babadosamigos.model.Valores;
import com.babadosamigos.babadosamigos.repository.GastosRepository;
import com.babadosamigos.babadosamigos.repository.ValoresRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import java.util.List;

@Controller
public class CaixaController {

    @Autowired
    private GastosRepository gastoRepository;
    @Autowired
    private ValoresRepository valorRepository;

    // Mapeia a URL "/caixa" para a página caixa
    @GetMapping("/caixa")
    public String exibirCaixa(Model model) {
        List<Gastos> gastos = gastoRepository.findAll();

        // Recupera o primeiro registro de valores
        Valores valores = valorRepository.findAll().stream().findFirst().orElse(new Valores());

        model.addAttribute("gastos", gastos);
        model.addAttribute("valores", valores);

        return "caixa"; // Retorna a página caixa.html
    }
}
