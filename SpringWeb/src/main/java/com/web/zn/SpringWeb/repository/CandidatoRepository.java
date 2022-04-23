package com.web.zn.SpringWeb.repository;

import java.util.List;

import org.springframework.data.jpa.repository.Query;
import org.springframework.data.repository.CrudRepository;
import com.web.zn.SpringWeb.models.Candidato;
import com.web.zn.SpringWeb.models.Vaga;


																	// String ou Long?
public interface CandidatoRepository extends CrudRepository<Candidato, String> {

	Iterable<Candidato> findByVaga(Vaga vaga);

	// Deleta pelo RG
	Candidato findByRg(String rg);

	Candidato findById(long id);

	// Query para a busca
	@Query(value = "select u from Candidato u where u.nomeCandidato like %?1%")
	List<Candidato> findByNomesCandidatos(String nomeCandidato);
}
