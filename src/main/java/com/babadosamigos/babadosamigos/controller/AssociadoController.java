package com.babadosamigos.babadosamigos.controller;

import com.babadosamigos.babadosamigos.model.Associado;
import com.babadosamigos.babadosamigos.repository.AssociadoRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;

import java.util.List;

@Controller
public class AssociadoController {

    @Autowired
    private AssociadoRepository associadoRepository;

    @GetMapping("/associados")
    public String listarAssociados(Model model) {
        List<Associado> associados = associadoRepository.findAll();
        model.addAttribute("associados", associados);
        return "associados"; // Retorna a página associados.html
    }
}
