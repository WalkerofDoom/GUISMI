package acao;

import kikaha.core.test.KikahaRunner;
import lombok.val;
import org.junit.Test;
import org.junit.runner.RunWith;

import javax.inject.Inject;

import java.util.Set;

import static org.junit.Assert.assertEquals;

@RunWith(KikahaRunner.class)
public class AcaoResourceTest {

    @Inject AcaoResource acaoResource;

    @Test
    public void getAcao(){
        val getResponse = acaoResource.findById(1L);
        val entity = getResponse.entity();
        System.out.println(entity);
        val entityAcao = (Acao) entity;
        assertEquals(entityAcao.nomeacao, "Golpear");
    }

    @Test
    public void validaGetAcaoByHabilidadeId(){
        val getResponse = acaoResource.findByIdHabilidade(1L);
        val entityAcao = (Set<Acao>) getResponse.entity();
        System.out.println( entityAcao);
    }
}