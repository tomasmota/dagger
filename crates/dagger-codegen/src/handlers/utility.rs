use genco::{prelude::*, quote};
use graphql_introspection_query::introspection_response::FullType;

pub fn render_description(t: &FullType) -> Option<rust::Tokens> {
    if let Some(description) = t.description.as_ref() {
        let lines = description.split('\n');
        let output: rust::Tokens = quote! {
            $(for line in lines => $(format!("\n/// {line}")))
        };

        return Some(output);
    }

    None
}
