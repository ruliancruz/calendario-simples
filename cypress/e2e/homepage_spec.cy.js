describe('Homepage', () => {
  it('should display a greeting', () => {
    cy.visit('/');

    cy.get('h1').invoke('text').then((text) => {
      expect(text).to.match(/Bom dia!|Boa tarde!|Boa noite!/);
    });
  });

  it('should render the calendar table with correct size', () => {
    cy.visit('/');

    cy.get('table tbody tr').should('have.length', 5);
    cy.get('table thead tr th').should('have.length', 7);
  });
})