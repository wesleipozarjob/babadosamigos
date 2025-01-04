package com.babadosamigos.babadosamigos.controller;

import com.babadosamigos.babadosamigos.model.Estatisticas;
import com.babadosamigos.babadosamigos.model.Qtd;
import com.babadosamigos.babadosamigos.repository.EstatisticasRepository;
import com.babadosamigos.babadosamigos.repository.QtdRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import java.util.List;

@Controller
public class EstatisticasController {

    @Autowired
    private EstatisticasRepository estatisticasRepository;

    @Autowired
    private QtdRepository qtdRepository;  // Adicionando a anotação @Autowired

    @GetMapping("/estatisticas")
    public String listarEstatisticas(Model model) {
        // Busca as estatísticas no banco
        List<Estatisticas> estatisticas = estatisticasRepository.findAll();
        model.addAttribute("estatisticas", estatisticas);

        // Busca a quantidade de babas
        List<Qtd> babas = qtdRepository.findAll();
        model.addAttribute("babas", babas); // Adiciona as informações de babas ao modelo

        return "estatisticas"; // Retorna a página estatisticas.html
    }
}
