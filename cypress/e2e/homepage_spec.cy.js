describe('Homepage', () => {
  it('should display a greeting', () => {
    cy.visit('/');

    cy.get('h1').invoke('text').then((text) => {
      expect(text).to.match(/Bom dia!|Boa tarde!|Boa noite!/);
    });
  });

  it('should display the current year in the header', () => {
    const currentYear = new Date().getFullYear();

    cy.visit('/');

    cy.get('header h2').should('contain.text', `Estamos em ${currentYear}`);
  });

  it('should display the correct day of the week headers in the calendar', () => {
    cy.visit('/');

    cy.get('table thead th').should(($th) => {
      const texts = $th.map((_, el) => Cypress.$(el).text()).get();
      
      expect(texts)
        .to
        .deep
        .eq(['Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom']);
    });
  });

  it('should display the calendar with the correct number of days', () => {
    cy.visit('/');

    cy.get('table tbody tr').should('have.length.greaterThan', 0);

    cy.get('table tbody td').should(($td) => {
      const texts = $td.map((_, el) => Cypress.$(el).text()).get();
      const days = texts.filter(text => !isNaN(parseInt(text, 10)));
      const numberOfDays = new Date(
        new Date().getFullYear(),
        new Date().getMonth() + 1,
        0
      ).getDate();

      expect(days.length).to.eq(numberOfDays);
    });
  });
})