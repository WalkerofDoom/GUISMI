package users;

import io.undertow.server.HttpHandler;
import io.undertow.server.HttpServerExchange;
import javax.inject.Inject;
import javax.inject.Singleton;
import javax.enterprise.inject.Typed;
import kikaha.core.modules.http.WebResource;
import kikaha.urouting.RoutingMethodResponseWriter;
import kikaha.urouting.RoutingMethodParameterReader;
import kikaha.urouting.RoutingMethodExceptionHandler;
import kikaha.urouting.api.Response;
import lombok.extern.slf4j.Slf4j;

@Slf4j
@Singleton
@Typed( HttpHandler.class )
@WebResource( path="/users/", method="GET" )
final public class GeneratedUserResource1206496396 implements HttpHandler {

	@Inject RoutingMethodResponseWriter responseWriter;
	@Inject RoutingMethodParameterReader methodDataProvider;
	@Inject RoutingMethodExceptionHandler exceptionHandler;

	@Inject users.UserResource instance;

	@Override
	public void handleRequest( final HttpServerExchange exchange ) throws Exception {
        try {
			/* Does not require to parse form data. */
            /* Does not require to parse body data. */
            this.runMethod( exchange );
        } catch ( Throwable cause ) {
            this.handleException( exchange, cause );
        }
	}

    private void runMethod( final HttpServerExchange exchange ) {
        runMethod( exchange, null );
    }

	private void runMethod( final HttpServerExchange exchange, final byte[] bodyData ){
		if ( exchange.isInIoThread() )
			exchange.dispatch( ()-> this.runMethod( exchange, bodyData ) );
		else  try {
				final java.util.Collection response = instance.retrieveAllUsers(  );
					responseWriter.write( exchange, response );
		} catch ( Throwable cause ) {
			this.handleException( exchange, cause );
		}
	}

	private void handleException( final HttpServerExchange exchange, final Throwable cause ){
        if ( exchange.isInIoThread() ) {
            exchange.dispatch( ()-> handleException( exchange, cause ) );
            return;
        }

        try {
            final Response response = exceptionHandler.handle( cause );
            responseWriter.write( exchange, response );
        } catch ( Throwable newCause ){
            log.error( "Could not handle the failure. Reason: " + newCause.getMessage(), newCause );
            log.error( "Original failure reason: " + cause.getMessage(), cause );
            log.error( "Please double check your ExceptionHandler implementations for possible issues..." );
            exchange.endExchange();
        }
	}

    public String toString(){
        return "users.UserResource.retrieveAllUsers";
    }
}